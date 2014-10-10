<?php

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class FuncionalidadeRepository extends EntityRepository {
	
	/**
	 * Verifica as funcionalidades do perfil do usuário.
	 * @param type $idPerfil
	 * @return Funcionalidades
	 */
	public function findByFuncPerfil($idPerfil) {
		$queryBase = $this->createQueryBuilder('F');
		$query = $queryBase->select('TP.noTipoFuncionalidade, M.noMenu, M.noModulo,S.noSubmodulo ')
		->innerJoin('F.idSubmodulo', 'S')
		->innerJoin('S.idModulo', 'M')
		->innerJoin('F.idPerfil', 'P')
		->innerJoin('F.idTipoFuncionalidade', 'TP')
		->andWhere('P.idPerfil = :idPerfil')
		->setParameter(':idPerfil', $idPerfil)
		->orderBy('M.noModulo');
		
	
		return $query->getQuery()->getArrayResult();
	}
	
	/**
	 * Verifica as funcionalidades do perfil do usuário de acordo com o módulo selecionado.
	 * @param int $idPerfil, $noModulo
	 * @return Funcionalidades
	 */
	public function findByFuncPerfilMod($idPerfil, $noModulo) {
	    $queryBase = $this->createQueryBuilder('F');
	    $query = $queryBase->select('M.noModulo,S.noSubmodulo, S.noImg, S.noMenu as noMenuSubmodulo, F.noMenu as noMenuFuncionalidade,TP.noTipoFuncionalidade')
	    ->innerJoin('F.idSubmodulo', 'S')
	    ->innerJoin('S.idModulo', 'M')
	    ->innerJoin('F.idPerfil', 'P')
	    ->innerJoin('F.idTipoFuncionalidade', 'TP')
	    ->where('P.idPerfil = :idPerfil AND M.noModulo = :noModulo AND F.stAtivo = :stAtivo AND F.noMenu IS NOT NULL')
	    ->setParameter(':idPerfil', $idPerfil)
	    ->setParameter(':noModulo', $noModulo)
	    ->setParameter(':stAtivo', TRUE)
	    ->orderBy('S.noSubmodulo');
	
	
	    return $query->getQuery()->getArrayResult();
	}


	

}
