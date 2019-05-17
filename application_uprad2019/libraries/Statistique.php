<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Statistique
{
    public function __construct()
    {
        $CI = get_instance();
        $CI->load->model('General_model');
        $CI->load->library('user_agent');
    }

    /**
     * cette méthode piste toutes les visites du site pour ajouter en base
     */
    public function getVisite()
    {
        $UP = get_instance();
        //On recupere l'adresse ip du visiteur
        $ip = !empty($UP->input->ip_address()) ? $UP->input->ip_address() : '';

        //On recupere le navigateur utilisé
        $agent = '';
        if ($UP->agent->is_browser()) {
            $agent = $UP->agent->browser() . ' ' . $UP->agent->version();
        } elseif ($UP->agent->is_robot()) {
            $agent = '';
        } elseif ($UP->agent->is_mobile()) {
            $agent = $UP->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }
        if (!empty($ip) && !empty($agent)) {
            $dataInsert = array(
                'adresseIp' => $ip,
                'navigateur' => $agent,
                'date_visite' => date("Y-m-d H:i:s"),
                'platform' => $UP->agent->platform()
            );
            $donne = $UP->General_model->verifStat($ip, $UP->agent->platform(), date("d"));
            if ($donne == true) {
                $UP->General_model->AjoutDonnesEnBase($dataInsert, 'historiquevisite');
                return true;
            } else {
                return false;
            }
        }
    }
}
