var gnp_div='get-new-posts_menu';var msg_div='get-new-msgs_menu';var mem_div='get-members';var divobj;var divopen=0;var xmlobj;var reg_img='';var myass_main;var myass_loaded=0;var pm_cycle_count=0;var search_cache={};var posts_st=0;function xml_show_new_posts(st){posts_st=st;xml_myassistant_init('posts');}function xml_myassistant_init(tab){myass_main=document.getElementById('get-myassistant');myass_drag=document.getElementById('myass-drag');myass_content=document.getElementById('myass-content');do_request_function=function(){if(!xmlobj_myass.readystate_ready_and_ok()){return;}var html=xmlobj_myass.xmlhandler.responseText;if(is_ie){html="<iframe id='myass-shim' src='"+ipb_var_image_url+"/iframe.html' class='iframshim' scrolling='no' frameborder='0' style='position:absolute; top:0px; left:0px; right:0px; display: none;'></iframe>"+html;}myass_content.innerHTML=html;if(is_ie){drag_html=myass_drag.innerHTML;main_drag_html="<iframe id='myass-shim-two' src='"+ipb_var_image_url+"/iframe.html' class='iframshim' scrolling='no' frameborder='0' style='position:absolute; top:0px; left:0px; right:0px; display: none;'></iframe>"+drag_html;myass_drag.innerHTML=main_drag_html;}if(is_ie){myass_shim=document.getElementById('myass-shim');myass_shim.style.width=myass_content.offsetWidth;myass_shim.style.height=myass_content.offsetHeight;myass_shim.style.zIndex=myass_content.style.zIndex-1;myass_shim.style.top=myass_content.style.top;myass_shim.style.left=myass_content.style.left;myass_shim.style.display="block";myass_shim_d=document.getElementById('myass-shim-two');myass_shim_d.style.width=myass_drag.offsetWidth;myass_shim_d.style.height=myass_drag.offsetHeight;myass_shim_d.style.zIndex=myass_drag.style.zIndex-1;myass_shim_d.style.top=myass_drag.style.top;myass_shim_d.style.left=myass_drag.style.left;myass_shim_d.style.display="block";}};xmlobj_myass=new ajax_request();xmlobj_myass.onreadystatechange(do_request_function);if(!tab){xmlobj_myass.process(ipb_var_base_url+'act=buddy&xml=1');}else if(tab=='newpms'){var limit_a=0;pm_cycle_count++;if(pm_cycle_count<=ipb_new_msgs){limit_a=pm_cycle_count-1;}else{pm_cycle_count=1;}xmlobj_myass.process(ipb_var_base_url+'act=buddy&xml=1&tab='+tab+'&limit='+limit_a);myass_content.style.width='398px';myass_content.style.overflow='auto';myass_content.style.overflowX='hidden';}else if(tab=='posts'){xmlobj_myass.process(ipb_var_base_url+'act=buddy&xml=1&tab='+tab+'&st='+posts_st);}else{xmlobj_myass.process(ipb_var_base_url+'act=buddy&xml=1&tab='+tab);}myass_main.style.position='absolute';myass_main.style.display='block';myass_main.style.zIndex=99;if(!myass_loaded){var my_width=0;var my_height=0;if(typeof(window.innerWidth)=='number'){my_width=window.innerWidth;my_height=window.innerHeight;}else if(document.documentElement&&(document.documentElement.clientWidth||document.documentElement.clientHeight)){my_width=document.documentElement.clientWidth;my_height=document.documentElement.clientHeight;}else if(document.body&&(document.body.clientWidth||document.body.clientHeight)){my_width=document.body.clientWidth;my_height=document.body.clientHeight;}var divheight=parseInt(myass_main.style.Height);var divwidth=parseInt(myass_main.style.Width);divheight=divheight?divheight:400;divwidth=divwidth?divwidth:400;var divxy=my_getcookie('ipb-myass-div');var co_ords;if(divxy&&divxy!=null){co_ords=divxy.split(',');if(co_ords.length){var final_width=co_ords[0];var final_height=co_ords[1];if(co_ords[0]>my_width){final_width=my_width-divwidth;}if(co_ords[1]>my_height){final_height=my_height-divheight;}myass_main.style.left=final_width+'px';myass_main.style.top=final_height+'px';}}else{myass_main.style.left=my_width/2-(divwidth/2)+'px';myass_main.style.top=my_height/2-(divheight/2)+'px';}Drag.cookiename='ipb-myass-div';Drag.init(myass_drag,myass_main);myass_loaded=1;}};function xml_myassistant_search(url){var keywords=document.getElementById('myass-search-input').value;var msg_field=document.getElementById('myass-search-message');var url=ipb_var_base_url+'act=Search&CODE=01&forums=all&cat_forum=forum&joinname=1&search_in=posts&result_type=topics&xml=1&keywords='+escape(keywords);if(keywords.length<4){msg_field.innerHTML=ipb_myass_chars_lang;return false;}if(search_cache[keywords]){msg_field.innerHTML=search_cache[keywords];return;}do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){xmlobj.show_loading();return;}xmlobj.hide_loading();var html=xmlobj.xmlhandler.responseText;msg_field.innerHTML=html;search_cache[keywords]=html;};xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);xmlobj.process(url);};function xml_dst_set(url){do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){return;}var html=xmlobj.xmlhandler.responseText;if(html=='error'){window.location=url.replace('&xml=1','&xml=0');}};xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);xmlobj.process(url);};function init_gd_image(){var reg_img=document.getElementById('gd-antispam');try{reg_img.style.cursor='pointer';}catch(e){reg_img.style.cursor='hand';};reg_img._ready=1;reg_img.onclick=do_change_img;};function do_change_img(){var rc='';var act='Reg';var code='image';var reg_img=document.getElementById('gd-antispam');var qparts=reg_img.src.split("?");if(!reg_img._ready){return false;}if(qparts.length>1){var qvars=qparts[1].split("&");for(var i=0;(i<qvars.length);i++){var qparts=qvars[i].split("=");if(qparts[0]=='rc'){rc=qparts[1];};if(qparts[0]=='act'){act=qparts[1];};if(qparts[0]=='CODE'){code=qparts[1];};};};var url=ipb_var_base_url+'act=xmlout&do=change-gd-img&img='+rc;do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){return;}var html=xmlobj.xmlhandler.responseText;reg_img.src=ipb_var_base_url+'act='+act+'&CODE='+code+'&rc='+html;var reg_field=document.getElementById('regid');reg_field.value=html;reg_img._ready=1;};reg_img._ready=0;xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);xmlobj.process(url);}
