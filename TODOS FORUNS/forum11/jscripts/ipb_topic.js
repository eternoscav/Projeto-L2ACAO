var mystored_selection='';var post_cache=new Array();var ajax_loaded=1;var ignore_cache=new Array();var rate_value=0;add_onload_event(fix_linked_image_sizes);function fix_linked_image_sizes_attach_thumb(attach_id,width,height,file_size){var _img='<img src="'+ipb_var_image_url+'/img-resized.png" style="vertical-align:middle" border="0" alt="" />';var img_obj=document.getElementById('ipb-attach-img-'+attach_id);var div_obj=document.getElementById('ipb-attach-div-'+attach_id);var ct_obj=document.getElementById('ipb-attach-ct-'+attach_id);var cb_obj=document.getElementById('ipb-attach-cb-'+attach_id);var url_obj=document.getElementById('ipb-attach-url-'+attach_id);var tbl_obj=document.getElementById('ipb-attach-table-'+attach_id);var _width=parseInt(img_obj.width)?parseInt(img_obj.width):parseInt(img_obj.style.width);var _height=parseInt(img_obj.height)?parseInt(img_obj.height):parseInt(img_obj.style.height);var _padding=5;var _percent=0;if(is_ie){_width=parseInt(img_obj.currentStyle['width']);_height=parseInt(img_obj.currentStyle['height']);}if(is_safari){tbl_obj.style.display='inline-block';}if(width&&height){_percent=Math.ceil(100-parseInt(_width/width*100));}img_obj.className='ipb';img_obj.title=ipb_global_lang['click_to_view'];img_obj.onmouseover=fix_attach_images_mouseover;img_obj.onclick=function(event){ipsclass.pop_up_window(url_obj.href,width+20,height+20);ipsclass.cancel_bubble(event);};div_obj.style.width=(_width>140?_width:140)+'px';div_obj.style.height=_height+(_padding*2)+28+'px';div_obj.className='resized-linked-image';div_obj.style.paddingTop=_padding+"px";div_obj.style.paddingBottom=_padding+"px";div_obj.style.paddingLeft=_padding+3+"px";div_obj.style.paddingRight=_padding+3+"px";div_obj.style.textAlign='center';div_obj.title=ipb_global_lang['click_to_view'];ct_obj.style.fontSize='9px';cb_obj.style.fontSize='9px';cb_obj.style.textAlign='center';if(_percent>0){ct_obj.innerHTML=_img+'&nbsp;'+ipsclass.lang_build_string(ipb_global_lang['image_attach_percent'],_percent);}else{ct_obj.innerHTML=_img+'&nbsp;'+ipb_global_lang['image_attach_no_percent'];}cb_obj.innerHTML="";if(width&&height){cb_obj.innerHTML=ipsclass.lang_build_string(ipb_global_lang['image_attach_dims'],width,height);}cb_obj.innerHTML+=ipsclass.lang_build_string(ipb_global_lang['image_attach_size'],file_size);}function fix_linked_image_sizes(){if(ipsclass.settings['do_linked_resize']!=1){return true;}var images=document.getElementsByTagName('IMG');var _padding=2;var _count=0;var _img='<img src="'+ipb_var_image_url+'/img-resized.png" style="vertical-align:middle" border="0" alt="" />';var _img2='<img src="'+ipb_var_image_url+'/folder_attach_images/attach_zoom_in.png" style="vertical-align:middle" border="0" alt="" />';var _sw=screen.width*(parseInt(ipsclass.settings['resize_percent'])/100);for(var i=0;i<images.length;i++){if(images[i].className=='linked-image'){_count++;if(images[i].width>_sw){var _width=images[i].width;var _height=images[i].height;var _percent=0;images[i].width=_sw;if(images[i].width<_width&&_width>0&&images[i].width>0){_percent=Math.ceil(parseInt(images[i].width/_width*100));}images[i].id='--ipb-img-resizer-'+_count;images[i]._resized=1;images[i]._width=_width;var div=document.createElement('div');div.innerHTML=_img+'&nbsp;'+ipsclass.lang_build_string(ipb_global_lang['image_resized'],_percent,_width,_height);div.style.width=images[i].width-(_padding*2)+'px';div.className='resized-linked-image';div.style.paddingTop=_padding+"px";div.style.paddingBottom=_padding+"px";div.style.paddingLeft=_padding+"px";div.style.paddingRight=_padding+"px";div._is_div=1;div._resize_id=_count;div.onclick=fix_linked_images_onclick;div.onmouseover=fix_linked_images_mouseover;div.title=ipb_global_lang['click_to_view'];div._src=images[i].src;images[i].parentNode.insertBefore(div,images[i]);}}}}function fix_linked_images_onclick(e){PopUp(this._src,'popup',screen.width,screen.height,1,1,1);e=ipsclass.cancel_bubble_all(e);return false;};function fix_attach_images_mouseover(e){try{this.style.cursor='pointer';}catch(acold){}}function fix_linked_images_mouseover(e){try{this.style.cursor='pointer';}catch(acold){}}function emoticon(ecode,eobj,eurl){ecode=' '+ecode+' ';var obj_ta=document.getElementById('fastreplyarea');if((ua_vers>=4)&&is_ie&&is_win){if(obj_ta.isTextEdit){obj_ta.focus();var sel=document.selection;var rng=sel.createRange();rng.colapse;if((sel.type=="Text"||sel.type=="None")&&rng!=null){if(ecode!=""&&rng.text.length>0)ecode=rng.text+ecode;rng.text=ecode;}}else{obj_ta.value+=ecode;}}else if(obj_ta.selectionEnd){var ss=obj_ta.selectionStart;var st=obj_ta.scrollTop;var es=obj_ta.selectionEnd;if(es<=2){es=obj_ta.textLength;}var start=(obj_ta.value).substring(0,ss);var middle=(obj_ta.value).substring(ss,es);var end=(obj_ta.value).substring(es,obj_ta.textLength);if(obj_ta.selectionEnd-obj_ta.selectionStart>0){middle=ecode+middle;}else{middle=ecode+middle;}obj_ta.value=start+middle+end;var cpos=ss+(middle.length);obj_ta.selectionStart=cpos;obj_ta.selectionEnd=cpos;obj_ta.scrollTop=st;}else{obj_ta.value+=ecode;}obj_ta.focus();if((ua_vers>=4)&&is_ie&&is_win&&emowindow!='undefined'){emowindow.focus();}}function topic_scroll_to_post(post_id){if(!post_id){return false;}try{var post_main_obj=document.getElementById('post-main-'+post_id);}catch(error){var post_main_obj;}if(post_main_obj){var post_box_top=_get_obj_toppos(post_main_obj);if(post_box_top){scroll(0,post_box_top-30);}}}function topic_show_ignored_post(pid){try{var post_main=document.getElementById('post-main-'+pid);var post_ignore=document.getElementById('post-ignore-'+pid);post_main.innerHTML=ignore_cache[pid];}catch(e){}return false;}function topic_init_ignored_post(pid){try{var post_main=document.getElementById('post-main-'+pid);var post_ignore=document.getElementById('post-ignore-'+pid);ignore_cache[pid]=post_main.innerHTML;post_main.innerHTML=post_ignore.innerHTML;}catch(e){}}function ajax_fulleditor_for_edit(post_id){if(post_id&&ipb_input_t&&ipb_input_f){var _form=document.getElementById('quick-edit-form-'+post_id);var _url=ipb_var_base_url+'act=post&do=edit_post&f='+ipb_input_f+'&t='+ipb_input_t+'&p='+post_id+'&st='+ipb_var_st+'&_from=quickedit';_form.action=_url;_form.method='POST';_form.submit();xmlobj.show_loading();return false;}else{return false;}}function ajax_cancel_for_edit(post_id){if(post_cache[post_id]!=""){document.getElementById('post-'+post_id).innerHTML=post_cache[post_id];}return false;}function ajax_save_for_edit(post_id){var url=ipb_var_base_url+'act=xmlout&do=post-edit-save&p='+post_id+'&t='+ipb_input_t+'&f='+ipb_input_f;var fields=new Array();fields['md5check']=ipb_md5_check;fields['t']=ipb_input_t;fields['f']=ipb_input_f;fields['p']=post_id;fields['act']='xmlout';fields['do']='post-edit-save';fields['Post']=document.getElementById(post_id+'_textarea').value;fields['std_used']=1;try{fields['post_edit_reason']=document.getElementById('post_edit_reason').value;}catch(err){}var post_check=fields['Post'];if(post_check.replace( /^\s*|\s*$/g,"")==""){alert(js_no_empty_post);return false;}do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){xmlobj.show_loading();return;}xmlobj.hide_loading();var html=xmlobj.xmlhandler.responseText;if(html=='nopermission'){alert(js_error_no_permission);document.getElementById('post-'+post_id).innerHTML=post_cache[post_id];}else if(html!='error'){document.getElementById('post-'+post_id).innerHTML=html;xmlobj.execute_javascript(html);fix_linked_image_sizes();}};xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);var xmlreturn=xmlobj.process(url,'POST',xmlobj.format_for_post(fields));return false;}function ajax_prep_for_edit(post_id,event){global_cancel_bubble(event,true);var post_main_obj=document.getElementById('post-main-'+post_id);var post_box_top=_get_obj_toppos(post_main_obj);var url=ipb_var_base_url+'act=xmlout&do=post-edit-show&p='+post_id+'&t='+ipb_input_t+'&f='+ipb_input_f;post_cache[post_id]=document.getElementById('post-'+post_id).innerHTML;try{menu_action_close();}catch(e){}do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){xmlobj.show_loading();return;}xmlobj.hide_loading();var html=xmlobj.xmlhandler.responseText;if(html=='nopermission'){alert(js_error_no_permission);}else if(html!='error'){if(post_box_top){scroll(0,post_box_top-30);}document.getElementById('post-'+post_id).innerHTML=html;IPS_Lite_Editor[post_id]=new ips_text_editor_lite(post_id);IPS_Lite_Editor[post_id].init();}};xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);xmlobj.process(url);return false;}function checkselection(){var myselection='';if(window.getSelection){myselection=window.getSelection();}else if(document.selection){myselection=document.selection.createRange().text;}else if(document.getSelection){myselection=document.getSelection();}if(myselection!=''&&myselection!=null){if(myselection!=mystored_selection){document.getElementById('fastreply-pastesel').style.display='';mystored_selection=(myselection.toString()!='')?myselection.toString():null;}}else{mystored_selection=null;}}function pasteselection(){if(mystored_selection!=''&&mystored_selection!=null){var fr=document.getElementById('fastreplyarea');if(fr){fr.value+='[quote]'+mystored_selection+'[/quote]\n';fr.focus();}}return false;}function link_to_post(pid){temp=prompt(ipb_lang_tt_prompt,ipb_var_base_url+"showtopic="+ipb_input_t+"&view=findpost&p="+pid);return false;}function delete_post(theURL){if(confirm(ipb_lang_js_del_1)){window.location.href=theURL;}else{alert(ipb_lang_js_del_2);}}function multiquote_add(id){saved=new Array();clean=new Array();add=1;if(tmp=my_getcookie('mqtids')){saved=tmp.split(",");}for(i=0;i<saved.length;i++){if(saved[i]!=""){if(saved[i]==id){add=0;}else{clean[clean.length]=saved[i];}}}if(add){clean[clean.length]=id;eval("document.mad_"+id+".src=removequotebutton");eval("document.mad_"+id+".title='-'");}else{eval(" document.mad_"+id+".src=addquotebutton");eval("document.mad_"+id+".title='+'");}my_setcookie('mqtids',clean.join(','),0);return false;}function checkdelete(){if(!document.modform.selectedpids.value){return false;}isDelete=document.modform.tact.options[document.modform.tact.selectedIndex].value;if(isDelete=='delete'){formCheck=confirm(lang_suredelete);if(formCheck==true){return true;}else{return false;}}}function topic_toggle_pid(pid){if(isNaN(pid)){return false;}saved=new Array();clean=new Array();add=1;tmp=document.modform.selectedpids.value;saved=tmp.split(",");for(i=0;i<saved.length;i++){if(saved[i]!=""){if(saved[i]==pid){add=0;}else{clean[clean.length]=saved[i];}}}if(add){clean[clean.length]=pid;eval("document.img"+pid+".src=selectedbutton");}else{eval(" document.img"+pid+".src=unselectedbutton");}newvalue=clean.join(',');my_setcookie('modpids',newvalue,0);document.modform.selectedpids.value=newvalue;newcount=stacksize(clean);document.modform.gobutton.value=lang_gobutton+' ('+newcount+')';return false;};function topic_rate(){this.settings={'allow_rating':0,'default_rating':3,'img_star_on':'star_filled.gif','img_star_selected':'star_selected.gif','img_star_off':'star_empty.gif','img_main_star_0':'rating_0.gif','img_main_star_1':'rating_1.gif','img_main_star_2':'rating_2.gif','img_main_star_3':'rating_3.gif','img_main_star_4':'rating_4.gif','img_main_star_5':'rating_5.gif','img_base_url':'','div_rating_wrapper':'topic-rating-wrapper','text_rating_image':'topic-rating-img-','topic-rating-img-main':'topic-rating-img-main','topic-rating-my-rating':'topic-rating-my-rating','topic-rating-hits':'topic-rating-hits'};this.languages={'img_alt_rate':'','rate_me':''};this.init_rating_images=function(){var html='';if(!this.settings['allow_rating']){return false;}for(var i=1;i<=5;i++){var _onmouseover='';var _onmouseout='';var _onclick='';var _title='';_onmouseover=' onmouseover="this.style.cursor=\'pointer\'; topic_rate.show_rating_images('+i+', 0)"';_onmouseout=' onmouseout="topic_rate.show_rating_images(-1, 1)"';_onclick=' onclick="topic_rate.send_rating('+i+')"';_title=this.languages['img_alt_rate'];html+="<img style='vertical-align:top' src='"+this.settings['img_base_url']+'/'+this.settings['img_star_off']+"' "+_onmouseover+_onmouseout+_onclick+"id='"+this.settings['text_rating_image']+i+"' alt='-' title='"+_title+"' />";}document.getElementById(this.settings['div_rating_wrapper']).innerHTML=this.languages['rate_me']+' '+html;this.show_rating_images(this.settings['default_rating'],1);};this.send_rating=function(rating){rating=rating?rating:0;if(rating){var url=ipb_var_base_url+'act=xmlout&do=topic_rate&t='+ipb_input_t+'&rating='+rating;do_request_function=function(){if(!xmlobj.readystate_ready_and_ok()){xmlobj.show_loading('');return;}xmlobj.hide_loading();var html=xmlobj.xmlhandler.responseText;if(html=='no_permission'){alert(js_error_no_permission);}else if(html!='error'){var _result=html.split(',');var _new_value=_result[0];var _new_hits=_result[1];var _new_stars=_result[2];var _type=_result[3];topic_rate.settings['default_rating']=parseInt(_new_stars);topic_rate.show_rating_images(topic_rate.settings['default_rating'],1);menu_action_close();document.getElementById('topic-rating-hits').innerHTML=_new_hits;document.getElementById('topic-rating-my-rating').innerHTML=rating;show_inline_messages_instant('rating_updated');}};xmlobj=new ajax_request();xmlobj.onreadystatechange(do_request_function);xmlobj.process(url);return false;}};this.show_rating_images=function(rating,restore_default){rating=restore_default?this.settings['default_rating']:parseInt(rating);var star=restore_default?this.settings['img_star_on']:this.settings['img_star_selected'];for(var i=1;i<=5;i++){var _img=document.getElementById(this.settings['text_rating_image']+i);_img.src=this.settings['img_base_url']+'/'+this.settings['img_star_off'];}for(var i=1;i<=rating;i++){var _img=document.getElementById(this.settings['text_rating_image']+i);_img.src=this.settings['img_base_url']+'/'+star;}document.getElementById(this.settings['topic-rating-img-main']).src=this.settings['img_base_url']+'/'+this.settings['img_main_star_'+rating];};};