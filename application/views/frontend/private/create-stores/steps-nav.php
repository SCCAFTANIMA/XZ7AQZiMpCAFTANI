<?php

$step = intval($this->input->get("s"));

if($step==1){
    echo '<li class="active"> <a> <i class="fa fa-info fa-2"></i> <span> Détail</span> </a> </li>
<li > <a> <i class="fa fa-list-ul fa-2"></i> <span> Couleurs et type des tissus  </span></a></li>
<li> <a><i class="fa fa-tasks"> </i><span>Le choix du pack</span> </a> </li>
<li> <a><i class="fa fa-check-square-o  "> </i><span>Validation</span> </a> </li>
<li> <a><i class="fa fa-check"> </i><span>Fin</span></a> </li>';
}else if($step==2){
    echo '<li> <a> <i class="fa fa-info fa-2"></i> <span> Détail</span> </a> </li>
<li class="active"> <a> <i class="fa fa-list-ul fa-2"></i> <span> Couleurs et type des tissus  </span></a></li>
<li> <a><i class="fa fa-tasks"> </i><span>Le choix du pack</span> </a> </li>
<li> <a><i class="fa fa-check-square-o  "> </i><span>Validation</span> </a> </li>
<li> <a><i class="fa fa-check"> </i><span>Fin</span></a> </li>';
}else if($step==3){
    echo '<li class="active"> <a> <i class="fa fa-info fa-2"></i> <span> Détail</span> </a> </li>
<li> <a> <i class="fa fa-list-ul fa-2"></i> <span> Couleurs et type des tissus  </span></a></li>
<li  class="active"> <a><i class="fa fa-tasks"> </i><span>Le choix du pack</span> </a> </li>
<li> <a><i class="fa fa-check-square-o  "> </i><span>Validation</span> </a> </li>
<li> <a><i class="fa fa-check"> </i><span>Fin</span></a> </li>';
}else if($step==4){
    echo '<li> <a> <i class="fa fa-info fa-2"></i> <span> Détail</span> </a> </li>
<li> <a> <i class="fa fa-list-ul fa-2"></i> <span> Couleurs et type des tissus  </span></a></li>
<li> <a><i class="fa fa-tasks"> </i><span>Le choix du pack</span> </a> </li>
<li class="active"> <a><i class="fa fa-check-square-o  "> </i><span>Validation</span> </a> </li>
<li> <a><i class="fa fa-check"> </i><span>Fin</span></a> </li>';
}else if($step==5){
    echo '<li> <a> <i class="fa fa-info fa-2"></i> <span> Détail</span> </a> </li>
<li> <a> <i class="fa fa-list-ul fa-2"></i> <span> Couleurs et type des tissus  </span></a></li>
<li> <a><i class="fa fa-tasks"> </i><span>Le choix du pack</span> </a> </li>
<li> <a><i class="fa fa-check-square-o  "> </i><span>Validation</span> </a> </li>
<li class="active"> <a><i class="fa fa-check"> </i><span>Fin</span></a> </li>';
}





