<?php

namespace App\Controller;

use App\Form\UserRegistrationFormType;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


/**
 * Class SecurityController
 * @package App\Controller
 * @Route("/", name="app_")
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'titre_page' => $titrePage = "Login",
            'titre_section' => $titreSection = "page de login",
            'error' => $error,
            'last_username' => $lastUsername,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return new Exception("sera intercepté");
    }

    /**
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @param GuardAuthenticatorHandler $handler
     * @param LoginFormAuthenticator $authenticator
     * @return Response
     * @Route("/register", name="register")
     */
    public function register(
        Request $request,
        UserPasswordEncoderInterface $encoder,
        GuardAuthenticatorHandler $handler,
        LoginFormAuthenticator $authenticator)
    {
        $form = $this->createForm(UserRegistrationFormType::class);
        $form->handleRequest($request);



//----- CONDITIONS DE VALIDATION FORM REGISTER
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();

//----- ENCODER FUNCTION
            $user->setPassword($encoder->encodePassword(
                $user,
                $form['plainPassword']->getData()
            ));

//----- PERSIST PUIS FLUSH POUR BDD
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

//----- MESSAGE FLASH SUCCES
            $this->addFlash('succes', 'Bienvenue chez People InBeauty!');

            return $handler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main'
            );


        }

        return $this->render('security/register.html.twig', [
            'titre_page' => $titrePage = "Register",
            'titre_section' => $titreSection = "page d'inscription",
            'registrationForm' => $form->createView(),
        ]);
    }



}
