<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parametres_model extends CI_Model{

    private $table_users = 'users';

    public function profil_update_model($id, $nom = NULL, $prenom = NULL, $pseudo = NULL, $email = NULL, $metier = NULL, $bio = NULL)
    {
        $this->db->where('id', $id);

        $this->db->set('nom', $nom);

        $this->db->set('prenom', $prenom);

        $this->db->set('pseudo', $pseudo);

        $this->db->set('email', $email);

        $this->db->set('metier', $metier);

        $this->db->set('biographie', $bio);

        $this->db->replace($this->table_users);
    }

}