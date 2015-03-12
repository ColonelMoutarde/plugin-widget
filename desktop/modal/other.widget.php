<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!isConnect('admin')) {
	throw new Exception('{{401 - Accès non autorisé}}');
}

?>
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="well col-sm-12">
                <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="bsOtherActionName">{{Nom}}</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="bsOtherActionName" placeholder="{{Nom}}..."/>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" id="bsOtherActionDash">
                            <option value="1">Dashboard</option>
                            <option value="0">Mobile</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control" id="bsOtherActionType">
                            <option value="0">Jeedom</option>
                            <option value="1">Widgets</option>
                            <option value="2">Spécial</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well col-sm-6">
                <h4 class="col-sm-12 text-center"><strong>Off</strong></h4>
                <div class="col-sm-12" style="text-align: center; vertical-align: middle;">
                    <div class="eqLogic eqLogic-widget" style="display: none;">
                        <div class="verticalAlign">
                            <center id="bsOtherWidgetOff">
                            </center>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="well col-sm-6">
                <h4 class="col-sm-12 text-center"><strong>On</strong></h4>
                <div class="col-sm-12" style="text-align: center; vertical-align: middle;">
                    <div class="eqLogic eqLogic-widget" style="display: none;">
                        <div class="verticalAlign">
                            <center id="bsOtherWidgetOn">
                            </center>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;" class="col-sm-4">Image</th>
                        <th style="text-align: center;" class="col-sm-4">Taille</th>
                        <th style="text-align: center;" class="col-sm-4">Aperçu</th>
                    </tr>
                </thead>
                <tbody id="bodyOtherAction">
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">
                            <a class="btn btn-default btn-xs JeedomView" id="bsOtherActionInsertIcon1" style=display:none"><i class="fa fa-flag"></i> Rechercher une icone</a>
                            <select class="form-control widgetsView" value="" id="bsOtherImage1" >
                            </select>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <input type="number" class="form-control JeedomView" style=display:none" value="2.5" min="1" max="5" step="0.2" id="bsOtherActionIconSize1"/>
                            <label class="col-sm-12 control-label widgetsView" id="bsOtherLabel1"></label>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <span style="font-size: 2.5em;font-weight: bold;margin-top: 5px;" class="JeedomView" id="bsOtherActionIconCmd1"></span>
                            <img src="" id="bsOtherPreview1" class="img-responsive widgetsView" style="margin: 0px auto;" alt="Image 1">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;">
                            <a class="btn btn-default btn-xs JeedomView" id="bsOtherActionInsertIcon2" style=display:none"><i class="fa fa-flag"></i> Rechercher une icone</a>
                            <select class="form-control widgetsView" value="" id="bsOtherImage2" >
                            </select>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <input type="number" class="form-control JeedomView" disabled style=display:none" value="2.5" min="1" max="5" step="0.2" id="bsOtherActionIconSize2"/>
                            <label class="col-sm-12 control-label widgetsView" id="bsOtherLabel2"></label>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <span style="font-size: 2.5em;font-weight: bold;margin-top: 5px;" class=" JeedomView" id="bsOtherActionIconCmd2"></span>
                            <img src="" id="bsOtherPreview2" class="img-responsive widgetsView" style="margin: 0px auto;" alt="Image 2">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            <textarea class="form-control" id="bsViewOther" style='height: 600px;dispaly: none;'></textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <br>
        <button type="button" class="btn btn-danger pull-right" id="modalOtherActionCancel">{{Annuler}}</button>
        <button type="button" class="btn btn-success pull-right" id="modalOtherActionSave">{{Valider}}</button>
    </div>
</div>
<?php


include_file('desktop', 'other.widget', 'js', 'widget');
?>