<?php

namespace App\Http\Controllers;

use App\Models\Params;
use SicoHelpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;

class DevelopperController extends Controller
{
    public function Version(){
        
        dd(Helpers::version());
    }
    public function Traducteur(){
        $tables =[];$langues=[];
        $langues=DB::select('select * FROM versions where id=1')[0];
        
        $langue=get_object_vars($langues);
        $langue=array_keys($langue);
        unset($langue[0]);
        
        foreach (DB::select('SHOW TABLES') as $key => $value) {
            $tables[$key]=$value->Tables_in_sergeshalomfinancesicotronix;
        }
        return Helpers::Viewer('DeveloppersViews.Traducteur',['tables'=>$tables,"langues"=>$langue]);
    }

    public function SaveTraducteur(Request $req) {
        
        $tables=explode(' ',$req->tables);
        $langues=explode(' ',$req->langues);
        $langues_version=DB::select('select * FROM versions where id=1')[0];
        $langues_version=get_object_vars($langues_version);
        unset($langues_version['id']);
        unset($langues_version['created_at']);
        unset($langues_version['updated_at']);
        $errors=[];
        foreach ($langues as $key => $value) {
            if(!array_key_exists($value,$langues_version)){
                array_push($errors,"La langue ".$value." n'est pas utilisée");
            }
        }
        if($errors){
            return redirect()->back()->with(['Retour'=>$errors]);
        }

        $codeIso=[
            "netherland"=>"nl",
            "italien"=>"it",
            "espagnol"=>"es",
            "anglais"=>"en",
            "turque"=>"tr",
            "ukrainien"=>"uk",
            "russe"=>"ru",
            "deutsch"=>"de",
            "albanais"=>"sq",
            "serbe"=>"sr", 
            "letton"=>"lv",
            "estonien"=>"et",
            "slovene"=>"sl",
            "italien"=>"it",
            "english"=>"en",
            "español"=>"es",
            "portugais"=>"pt",
            "portugues"=>"pt",
            "portugues"=>"pt",
            "Russe"=>"ru",
            "norsk"=>"no",
            "portugues"=>"pt",
            "Română"=>"ro",
            "slovaque"=>"sk",
            "Հայերեն"=>"hy",
            "allemand"=>"de",
            "italiano"=>"it",
            "Latvietis"=>"lv",
            "Ελληνικά"=>"el",
            "Беларуская"=>"be",
            "българскикая"=>"bg",
            "Bosanski"=>"bs",
            "Lietuvių"=>"lt",
            "Norsk"=>"nb",
            "српски"=>"sr",
            "ភាសាខ្មែរ"=>"km",
            "Nederlands"=>"nl",
            "eesti"=>"et",
            "polonais"=>"pl",
            "УКРАЇНСЬКИЙ"=>"uk",
            "svenska"=>"sv",
            "Latvietis"=>"lv",
            "estonie"=>"et",
            "български"=>"ru",
            "allemand"=>"de",
            "hebreu"=>"he"];
        foreach ($langues as $key => $value) {
            if(!array_key_exists($value,$codeIso)){
                array_push($errors,"Erreur code iso de la langue ".$value." n'est pas défini");
            }
        }
        if($errors){
            return redirect()->back()->with(['Retour'=>$errors]);
        }


        foreach ($tables as $key => $valuet) {
            /***************On récupère la version française de chaque table**************** */
                        $versions=DB::select('select id, francais from '.$valuet);
                        
                        $verion=array();
                        foreach ($versions as $key => $value) {
                            $version[$value->id]=$value->francais;
                        }
                        
            /******************Parametres de traduction*************** */
                        $tr = new GoogleTranslate();
                        $tr->setSource('fr');
            /****************************On récupère les id  de chaque langue afin de vérifier s'il est vide************** */
                      foreach ($langues as $key_lang => $language) {
                        $existant=DB::select('select id, '.$language.' from '.$valuet);
                        
                        $idNull=[];
                        $tr->setTarget($codeIso[$language]);
                        foreach ($existant as $key => $value) {
                            
                           
                            if($value->$language==null && $version[$value->id]!=null){
                                //array_push($idNull,$value->id);
                                $traduit=$tr->translate($version[$value->id]);
                                try {
                                    DB::update('update '.$valuet.' set '.$language.' = ? where id = ?', [$traduit,$value->id]);
                                } catch (\Throwable $th) {
                                    array_push($errors,$th);
                                }
                               }
                           
                        }
            
            
            
            
                      }
                    }
                    var_dump($errors);
    }
}
