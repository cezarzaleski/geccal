<?php

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class UsuarioRepository extends EntityRepository {

    /**
     * Verifica se existe usuário com Senha.
     * @param type $noLogin
     * @param type $noSenha
     * @return boolean
     */
    public function findByUsuarioAndSenha($noUsuario, $noSenha)
    {
        $user = $this->findOneBy(array('noUsuario' => $noUsuario,
            'noSenha' => $noSenha,'stAtivo'=> TRUE));

        if ($user) {
            return $user;
        } else {
            return FALSE;
        }
    }

}
