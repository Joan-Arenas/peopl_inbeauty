<?php

namespace App\Repository;

use App\Entity\Produit;
use App\Utils\Recherche;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @param Recherche $maRecherche
     * @return array
     */
    public function findProduitsByMaRecherche(Recherche $maRecherche): array
    {
        $maRequete = $this->createQueryBuilder('p')
            ->select('c', 'm', 'p')
            ->join('p.categorie', 'c')
            ->join('p.marque', 'm');

        if ($maRecherche->getCategories()) {
            $maRequete = $maRequete
                ->andWhere('p.categorie IN (:categories)')
                ->setParameter('categories', $maRecherche->getCategories());
        }


        if ($maRecherche->getMarques()) {
            $maRequete = $maRequete
                ->andWhere('p.marque IN (:marques)')
                ->setParameter('marques', $maRecherche->getMarques());
        }
//        dd($maRequete->getQuery());
        if ($maRecherche->getChaine()) {
            $maRequete = $maRequete
                ->andWhere('p.nom LIKE :chaine')
                ->setParameter('chaine', $maRecherche->getChaine());
        }
        return $maRequete->getQuery()->getResult();
    }
}
