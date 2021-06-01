<?
if(isset($_GET['sec'])){
switch ($_GET['sec']){

case "nova_conta":
include "pags/nova_conta.php";
break;

case "downloads":
include "pags/downloads.php";
break;

case "doacoes":
include "pags/doacoes.php";
break;

case "top_pvp":
include "pags/top_pvp.php";
break;

case "rank":
include "pags/rank.php";
break;

case "top_pk":
include "pags/top_pk.php";
break;

case "top_level":
include "pags/top_level.php";
break;

case "top_karma":
include "pags/top_karma.php";
break;

case "tempo_online":
include "pags/tempo_online.php";
break;

case "top_rec":
include "pags/top_rec.php";
break;

case "regras":
include "pags/regras.php";
break;

case "bosses":
include "pags/bosses.php";
break;

case "mudarsenha":
include "pags/mudarsenha.php";
break;

case "sieges":
include "pags/sieges.php";
break;

case "top_heroes":
include "pags/top_heroes.php";
break;

case "lineage2":
include "pags/lineage2.php";
break;

case "infos":
include "pags/infos.php";
break;

case "staff":
include "pags/staff.php";
break;

case "login":
include "pags/login.php";
break;

case "logar":
include "pags/logar.php";
break;

case "altera":
include "pags/altera.php";
break;

case "destravar":
include "pags/destravar.php";
break;

case "donate":
include "pags/donate.php";
break;

case "news":
include "pags/news.php";
break;

default:
include "pags/home.php";
break;

}
}else{
	include "pags/home.php";
	}
?>