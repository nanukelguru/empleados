<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresas
 *
 * @author daniel
 */
class Empresas extends Padre {

    public function Index() {
        $this->params["scripts"][] = "http://www.guriddo.net/demo/js/trirand/jquery.jqGrid.min.js";
        $this->params["scripts"][] = "http://www.guriddo.net/demo/js/trirand/i18n/grid.locale-es.js";
        $this->params["css"][] = "http://www.guriddo.net/demo/css/trirand/ui.jqgrid-bootstrap.css";
        $this->loadHTML("Empresas/Index");
    }

    public function Search($rows, $page, $sidx, $sord, $RazonSocial, $Direccion, $NombreContacto, $RUC) {
        $this->db->select(array(
                    'IdEmpresa',
                    'RazonSocial',
                    'Direccion',
                    'NombreContacto',
                    'RUC'
                ))
                ->from('Empresa')
                ->where("(RazonSocial like '%"+$this->db->escape($RazonSocial)+"%' or @RazonSocial='')")
                ->where("(Direccion like '%"+$this->db->escape($Direccion)+"%' or @Direccion='')")
                ->where("(NombreContacto like '%"+$this->db->escape($NombreContacto)+"%' or @NombreContacto='')")
                ->where("(RUC like '%"+$this->db->escape($RUC)+"%' or @RUC='')");

        $obj = $this->paginar($rows, $page, $si5dx, $sord);

        $obj->records=$this->db
                ->from('Empresa')
                ->where("(RazonSocial like '%"+$this->db->escape($RazonSocial)+"%' or @RazonSocial='')")
                ->where("(Direccion like '%"+$this->db->escape($Direccion)+"%' or @Direccion='')")
                ->where("(NombreContacto like '%"+$this->db->escape($NombreContacto)+"%' or @NombreContacto='')")
                ->where("(RUC like '%"+$this->db->escape($RUC)+"%' or @RUC='')")
                ->count_all_results();
        
        die(json_encode($obj));
    }

}
