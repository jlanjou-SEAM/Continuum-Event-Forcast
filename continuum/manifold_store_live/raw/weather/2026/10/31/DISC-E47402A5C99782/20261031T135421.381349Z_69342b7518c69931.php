var live={};live.controls={};live.version=24;if(is_mobile())
{live.config={'min_zoom':2,'max_zoom':15,'zoom_accuracy_circles':15,'max_strokes':1000,'max_strokes_check':30,'max_stroke_markers':300,'max_stroke_markers_check':15,'max_stroke_accuracy_markers':40,'max_stroke_marker_age':300,'max_circles':10,'marker_stroke_seconds':60,'marker_msec_update':5000,'close_when_invisible_sec':10,'marker_circle_msec_update':150,'debug':false,'debug_data':false};}
else
{live.config={'min_zoom':2,'max_zoom':15,'zoom_accuracy_circles':15,'max_strokes':10000,'max_strokes_check':2000,'max_stroke_markers':2000,'max_stroke_markers_check':1000,'max_stroke_accuracy_markers':80,'max_stroke_marker_age':300,'max_circles':100,'marker_stroke_seconds':60,'marker_msec_update':5000,'close_when_invisible_sec':1800,'marker_circle_msec_update':100,'debug':false,'debug_data':false};}
live.config.src_mask_default=4;live.config.rate_high=500;live.config.sound_dir="/Audio";live.config.no_transparency=false;live.config.tile_update_timefactor=15;live.config.tile_update_sub=0.2;live.config.tile_update_min_sec=120;live.config.tile_strokes_interval=120;live.config.tile_radar_interval=600;live.config.tile_clouds_interval=900;live.config.tiles_hide_on_drag=false;live.config.stations_hide_on_drag=false;live.config.page_reload_enabled=true;live.config.reload_minutes=6000;live.config.reload_minutes_standby=6000;live.config.reload_minutes_err=15;live.config.reload_minutes_err_rand=5;live.config.marker_background_update_sec=30;live.config.connection_err_sec=5;live.config.marker_msec_update_rate_high=live.config.marker_msec_update*2;live.config.marker_circle_msec_update_rate_high=live.config.marker_circle_msec_update*2;live.config.debug=false;live.config.debug_data=false;live.config.domain='lightningmaps.org';live.config.subdomains=[{'domain':'live','weight':1},{'domain':'live2','weight':1}];live.config.ws_path="/";live.config.xhr_path="/l/";live.config.map_hosts=["map.lightningmaps.org"];var R=[[-45,60],[80,160],[-180,-45]];var t=0;var urls=["/blitzortung/europe/index.php","/blitzortung/oceania/index.php","/blitzortung/america/index.php"];live.window_is_focused=true;live.strokes=[];live.track=function(name,type,value)
{if(1||now-live.data.last_pk>10000)
{try
{_paq.push(['trackEvent','Realtime',name,type,value]);live.data.last_pk=now;}
catch(e){}}}
live.data=[];live.data.delay=2;live.data.delay_src={};live.data.rate=0;live.data.rate_src={};live.data.connection=0;live.data.loops=0;live.data.last_loop=0;live.data.invisible_sec=0;live.data.last_pk=0;live.data.last_visible=new Date().getTime();live.data.server_id=null;live.data.do_reconnect=false;live.data.xhr=null;live.data.xhr_server="";live.data.xhr_timer=null;live.data.xhr_timer_check=null;live.data.xhr_last_load=0;live.data.xhr_tries=0;live.data.xhr_errs=0;live.data.xhr_sleep=0;live.data.ws=null;live.data.ws_server="";live.data.ws_last_load=0;live.data.ws_last_connect=0;live.data.ws_connects=0;live.data.ws_tries=0;live.data.ws_errs=0;live.data.ws_was_possible=false;live.data.count=0;live.data.strokes_saved=0;live.data.max_age_current=0;live.data.max_age_current_last=0;live.data.max_age_current_src={};live.data.max_age_current_last_src={};live.data.last_id={};live.data.src_mask=0;live.data.time_last={};live.data.size_last=0;live.is_running=true;live.user='';live.data.debug=function(txt,lvl)
{min_level=live.config.debug_data?live.config.debug_data:live.config.get('data_debug');if((min_level&&!lvl)||(min_level&&lvl<=min_level))
console.log(txt);}
live.data.init=function()
{live.data.connection=1;if(!live.data.ws_load('A'))
{live.data.debug("NO Websocket!");live.data.connection=-1;live.data.xhr_load();}
live.data.check();if(live.config.get('wsfail')==1)
{for(var i=0;i<10;i++)
{setTimeout(function(){live.data.ws_close("wsfail");},3000+i*i*2000);}}
live.config.onupdate("server",live.data.config_update);live.config.onupdate("port",live.data.config_update);live.config.onupdate("url",live.data.config_update);live.config.onupdate("nows",live.data.config_update);live.config.onupdate("nomsg",live.data.config_update);live.config.onupdate("noxhr",live.data.config_update);live.config.onupdate("wsfail",live.data.config_update);}
live.data.config_update=function(val,name)
{live.data.debug("Config Update");live.data.ws_close("config_update");}
live.data.check=function()
{var now=new Date();var ws_max_errs=8;var xhr_max_errs=4;var ws_reopen_sec=3000;var is_visible=true;var was_invisible=false;var interval=0;if(!live.is_visible())
{live.data.invisible_sec++;if(live.data.invisible_sec>live.config.close_when_invisible_sec)
is_visible=false;}
if(live.data.invisible_sec>live.config.close_when_invisible_sec&&is_visible)
{was_invisible=true;live.data.last_visible=new Date().getTime();}
if(!is_visible&&live.data.connection>0&&live.data.ws_state()==1)
{live.data.ws_close("invisible",{"sec":(new Date().getTime()-live.data.last_visible)/1000});live.data.connection=1;live.data.debug("check | ws: not visible -> close");live.track('WsClose','Invisible',Math.round((new Date().getTime()-live.data.last_visible)/1000));}
else if(was_invisible&&live.data.connection>0)
{live.data.debug("check | ws: reconnect after invisibility");live.data.ws_load('iv');live.track('WsReload','WasInvisible',live.data.invisible_sec);}
else if(live.archive.is_enabled())
{if(live.data.ws_state()==1)
{live.data.ws_close("archive");live.data.connection=1;live.data.debug("check | ws: not visible -> close");live.track('WsClose','Archive');}
live.data.do_reconnect="archive";}
else if(live.data.do_reconnect)
{live.data.debug("check | ws: reconnect "+live.data.do_reconnect);live.data.ws_load(live.data.do_reconnect);live.track('WsReload',live.data.do_reconnect,0);live.data.do_reconnect=false;}
else if(is_visible)
{interval=Math.floor(Math.log(live.data.ws_errs+live.data.xhr_errs+1))+1;if(live.data.ws_possible()&&(t%interval==0))
{if((live.data.ws_last_connect-live.data.ws_last_load>8||live.data.ws_last_load==0)&&live.data.loops>8&&live.data.connection>0)
{live.data.connection=-1;live.data.xhr_load();live.data.ws_close("no answer, tries="+live.data.ws_tries);live.data.ws_errs++;live.data.debug("check | ws: no answer -> xhr");}
else if(live.data.ws_tries>=ws_max_errs&&live.data.connection>0)
{live.data.debug("check | ws: too much errors ("+live.data.ws_tries+") -> try xhr");live.data.connection=-1;live.data.xhr_tries=0;live.data.xhr_load();live.data.ws_close("too much error, tries="+live.data.ws_tries);}
else if(live.data.xhr_tries>=xhr_max_errs&&live.data.connection<0)
{live.data.debug("check | xhr: too much errors ("+live.data.xhr_tries+") -> try ws");live.data.connection=1;live.data.ws_tries=0;live.data.ws_load('x');}
else if(live.data.connection<0&&(live.data.loops%(60+live.data.ws_errs*5+Math.pow(live.data.ws_tries,3)))==0)
{live.data.debug("check | xhr: trying to use ws ...");live.data.connection=1;live.data.ws_load('t');}
else if(live.data.connection<0&&(live.data.loops%5)==0&&(live.data.ws_was_possible||live.data.loops<30))
{live.data.debug("check | xhr: trying to use ws like before...");live.data.connection=1;live.data.ws_load('T');}
else if(live.data.connection>0&&live.data.ws_state()!=1&&(live.data.ws_errs||live.data.loops>5)&&(now-live.data.ws_last_load)>ws_reopen_sec&&(now-live.data.ws_last_connect)>ws_reopen_sec)
{live.data.debug("check | ws: re-open");live.data.ws_load('re');}
else if((live.data.loops%60)==0)
{live.data.update('w');if((now-live.data.ws_last_load)<=30000&&live.data.ws_tries>0)
live.data.ws_tries--;}}
if(live.data.loops>live.config.reload_minutes*60)
{live.data.debug("check | Page open too long.");live.page_reload('TooLong');}
if(live.data.loops>5&&now-live.data.last_loop>live.config.reload_minutes_standby*60000)
{live.data.debug("check | Page open too long and no action.");live.page_reload('Standby');}
live.data.last_loop=now;var last_load=live.data.ws_last_load>live.data.xhr_last_load?live.data.ws_last_load:live.data.xhr_last_load;if(live.data.loops>live.config.reload_minutes_err*60&&now>last_load+live.config.reload_minutes_err*60000)
{live.data.debug("check | No connection.");live.page_reload('ConnectErr',Math.random()*1000*60*live.config.reload_minutes_err_rand);}
else if(live.data.loops>live.config.connection_err_sec&&now>last_load+live.config.connection_err_sec*1000&&live.data.ws_state()!=1)
{live.clock.set_text_bad("Connecting...");}}
if(live.data.loops==5&&live.data.loops==10&&live.data.loops==20)
{live.marker.check_strokes(true);}
live.data.debug("check | time: "+t+" interval="+interval+" invis="+live.data.invisible_sec,2);if(live.is_visible())
live.data.invisible_sec=0;if(!live.archive.is_enabled())
{if(t>100000)
{live.clock.set_time((t-live.data.delay)*1000);}
else
{live.clock.set_text_normal("Loading...");}}
t++;live.data.loops++;if(live.is_running)
setTimeout(live.data.check,1000);}
live.data.update=function(reason)
{if(!reason)
reason='u';if(live.data.connection>0&&live.data.loops>0)
return live.data.ws_send(reason);else if(live.data.connection<0&&live.data.loops>0)
return true;return false;}
live.data.ws_possible=function()
{return("WebSocket"in window)&&!live.config.get('nows');}
live.data.ws_send=function(reason,extra)
{if(live.config.get('nomsg')==1)
return true;if(live.data.ws_state()!=1)
return false;var msg={'v':live.version,'i':live.data.last_id,'s':live.detectors.load_stations,'x':live.data.xhr_errs,'w':live.data.ws_errs,'tx':live.data.xhr_tries,'tw':live.data.ws_tries,'a':live.data.src_mask,'z':live.map.getZoom(),'b':live.is_visible(),'h':window.location.hash,'l':live.data.loops,'t':t,'from_lightningmaps_org':true,'p':[Math.round(live.map.getBounds().getNorthEast().lat*1E1)/1E1,Math.round(live.map.getBounds().getNorthEast().lng*1E1)/1E1,Math.round(live.map.getBounds().getSouthWest().lat*1E1)/1E1,Math.round(live.map.getBounds().getSouthWest().lng*1E1)/1E1]};if(reason)
msg.r=reason;if(extra)
msg.extra=extra;try{live.data.ws.send(JSON.stringify(msg));live.data.debug("ws: tx ("+JSON.stringify(msg)+")");}catch(e){live.data.debug("ws: tx send error ("+JSON.stringify(msg)+")");return false;}
return true;}
live.data.ws_state=function()
{try{return live.data.ws.readyState;}catch(e){return-1;}}
live.data.ws_close=function(msg,extra)
{if(!extra)
extra={};extra.msg=msg;live.data.debug("ws: close ("+msg+")");live.data.ws_send('close',extra);setTimeout(function(){try{live.data.ws.close();}catch(e){}},100);}
live.data.server=function(connects)
{if(live.data.server_id===null)
{sum=0;for(i in live.config.subdomains)
{if(!"weight"in live.config.subdomains[i])
live.config.subdomains[i].weight=1;sum+=live.config.subdomains[i].weight;}
rnd=Math.random()*sum;rsum=0;for(i in live.config.subdomains)
{rsum+=live.config.subdomains[i].weight;if(rnd<rsum)
{live.data.server_id=i;break;}}
console.log("sum "+sum+" rnd "+rnd+" -> id "+live.data.server_id);}
else
live.data.server_id=(live.data.server_id+connects)%(live.config.subdomains.length);server=live.config.subdomains[live.data.server_id];domain=server.domain+"."+live.config.domain;console.log("Server: "+domain+" / Attempts: "+connects);return domain;}
live.data.ws_load=function(info)
{if(live.data.connection<0)
return false;if(!live.data.ws_possible())
return false;if(live.data.ws_state()==1&&new Date().getTime()-live.data.ws_last_load<60000)
{live.data.debug("ws: already open");return;}
else if(live.data.ws_state()==0)
{live.data.debug("ws: is already opening");live.data.ws_close("ws_load("+info+")","ws_load"+info);return;}
else if(live.data.ws_state()==1||live.data.ws_state()==2)
{live.data.ws_close("open, state="+live.data.ws_state());setTimeout(function(){live.data.ws_load(info);},1000);return;}
var protocol='ws';live.data.ws_url=live.config.ws_path;live.data.ws_server=live.data.server(live.data.ws_tries);if("https:"==document.location.protocol||((live.data.ws_tries+1)%3==0))
{live.data.ws_port=443;protocol="wss";}
else
{live.data.ws_port=80;}
if(live.config.get('port'))
live.data.ws_port=live.config.get('port');if(live.config.get('server'))
live.data.ws_server=live.config.get('server');if(live.config.get('url'))
live.data.ws_url=live.config.get('url');live.data.ws_tries++;live.data.ws=new WebSocket(protocol+"://"+live.data.ws_server+":"+live.data.ws_port+live.data.ws_url);live.data.debug("ws: opening ("+live.data.ws_tries+" tries): "+protocol+"://"+live.data.ws_server+":"+live.data.ws_port);live.data.ws.onopen=function()
{live.data.ws_last_connect=new Date().getTime();live.data.debug("ws: opened :-)");live.data.ws_send(info);};live.data.ws.onmessage=function(event)
{var msg;try{msg=JSON.parse(event.data);}catch(e){live.data.debug("ws: rx message data error: "+e+" - data was: '"+event.data+"'");return;}
if("reload"in msg)
setTimeout('window.location.reload();',msg.reload);if("time"in msg)
t=msg.time;if("k"in msg)
{live.data.ws.send('{"k": '+((msg.k*3604)%7081*new Date().getTime()/100)+' } ');}
var ret={'in_bounds':false,'wrong_time':false,'flags':msg.flags};live.data.ws_connects++;live.data.ws_was_possible=true;live.data.ws_last_load=new Date().getTime();live.data.debug("ws: rx message "+event.data,2);live.data.insert(msg.strokes,0,ret);msg=null;}
live.data.ws.onclose=function()
{live.data.debug("ws: was closed");live.data.ws_errs++;};live.data.ws.onerror=function(err)
{live.data.debug("ws: error occured");live.data.debug(err);live.data.ws_errs++;live.data.ws.close();};return true;}
live.data.xhr_load=function(do_sleep)
{if(live.data.connection>=0||live.config.get("noxhr")==1)
return;clearTimeout(live.data.xhr_timer);if(window.navigator.standalone&&!live.is_visible())
{if(!do_sleep||live.data.xhr_sleep>20)
{live.data.debug("xhr: sleep");live.data.xhr_timer=setTimeout('live.data.xhr_load(true);',1000);return;}
else
{live.data.xhr_sleep++}}
else if(live.is_visible())
live.data.xhr_sleep=0;if(!live.data.xhr)
live.data.xhr=new XMLHttpRequest();live.data.xhr_server=live.data.server(live.data.xhr_errs);var url="https://"+live.data.xhr_server+live.config.xhr_path+'?v='
+live.version+'&l='
+live.data.size_last
+(live.detectors.load_stations?'&s':'')
+(is_mobile()?'&m':'')
+('&i='+live.data.src_mask)
+(live.data.ws_errs?'&e='+Math.round(Math.log10(live.data.ws_errs)+1):'');live.data.xhr.open('GET',url,true);live.data.xhr.onload=function()
{if(this.readyState==4)
{clearTimeout(live.data.xhr_timer_check);var wait=5000;if(this.status==200)
{wait=live.data.xhr_parse(this.responseText);live.data.xhr_last_load=new Date().getTime();}
live.data.debug("xhr: wait "+wait);live.data.xhr_timer=setTimeout('live.data.xhr_load();',wait);}};live.data.xhr.onerror=function()
{document.getElementById('delay').innerHTML='?';live.data.xhr_errs++;live.data.xhr_tries++;live.data.debug("xhr: error");}
live.data.xhr.onabort=function()
{clearTimeout(live.data.xhr_timer_check);live.data.debug("xhr: abort");}
live.data.xhr.send(null);clearTimeout(live.data.xhr_timer_check);live.data.xhr_timer_check=setTimeout("live.data.xhr_timeout()",8000);}
live.data.xhr_timeout=function()
{document.getElementById('delay').innerHTML='?';live.data.xhr.abort();live.data.xhr_load();live.data.xhr_errs++;live.data.debug("xhr: timeout");}
live.data.xhr_parse=function(text)
{try{var data=JSON.parse(text);}catch(e){live.data.debug("xhr: JSON parse err "+e);live.data.debug(text);return 1000;}
live.data.debug("xhr: "+text,2);if(typeof data['r']!='undefined')
{if(data['r']>500)
setTimeout('window.location.reload();',data['r']);}
if(typeof data['s']!='undefined')
{if(live.data.size_last==data['s'])
live.data.size_last++;else
live.data.size_last=data['s'];}
else
live.data.size_last++;if(typeof data['t']!='undefined')
{t=t>data['t']?t:data['t'];}
var ret={'in_bounds':false,'wrong_time':!(typeof(data['x'])!='undefined'||!data['x'])};live.data.insert(data['d'],data['t'],ret);if(ret.in_bounds&&(typeof data['w']!='undefined'))
return data['w']<100||data['w']>60000?500:data['w'];else if(!ret.in_bounds&&(typeof data['o']!='undefined'))
return data['o']<200||data['w']>60000?5000:data['o'];else
return ret.in_bounds?500:5000;}
live.data.stroke_is_visible=function(S)
{return live.data.src_mask&(1<<S.src);}
live.data.insert=function(strokes,time_diff,ret)
{var wait=0;var x=0;var new_strokes=[];var S=null;var min_delay={};for(var i in strokes)
{var id_found=false;if(!strokes[i])
continue;var d=strokes[i];var pos_new=[parseFloat(d.lat),parseFloat(d.lon)];for(x in live.strokes)
{if(live.strokes[x]&&typeof live.strokes[x].id!='undefined'&&live.strokes[x].id==strokes[i].id&&live.strokes[x].src==strokes[i].src)
{id_found=true;break;}}
if(!id_found)
{x=(live.data.count++)%live.config.max_strokes;}
if(typeof(live.strokes[x])=='undefined')
{live.strokes[x]={};live.data.strokes_saved++;}
S=live.strokes[x];if(!id_found)
{try{var tries=20;while(typeof(S)!='undefined'&&typeof(S.pos)!='undefined'&&live.data.stroke_is_visible(S)&&live.map.getBounds().contains(S.pos)&&!live.map.getBounds().contains(pos_new)&&tries>=0)
{x=(x+1)%live.config.max_strokes;S=live.strokes[x];tries--;}
if(typeof(live.strokes[x])=='undefined')
live.strokes[x]={};if(tries<=0)
{live.debug("No entry left for invisible stroke. Don't save.");live.data.strokes_saved--;live.data.count--;continue;}}
catch(e)
{live.debug("Error while searching entry for stroke"+e);continue;}
if(typeof(S.pos)!='undefined')
delete S.pos;live.marker.stroke_deleted(S);live.thunder.stroke_deleted(S);}
try
{S.id=d.id;S.src=d.src;S.index=live.data.count;S.time=d.time/1000+time_diff;S.alt=d.alt;S.dev=d.dev;if(d.sta)
S.stations=d.sta;S.pos=pos_new;S.in_bounds=live.map.getBounds().contains(S.pos);S.Marker=null;if(typeof min_delay[S.src]=='undefined')
min_delay[S.src]=1E9;if(d.del>0&&d.del<min_delay[S.src])
min_delay[S.src]=d.del/1000;live.data.last_id[S.src]=S.id;}
catch(e)
{live.debug("insert err: "+e);continue;}
if(id_found)
continue;if(S.in_bounds)
ret.in_bounds=true;live.data.time_last[S.src]=S.time;new_strokes.push(x);}
if(new_strokes.length)
{var factor=1000;var strokes_visible={};if(live.data.loops<5)
factor=100;for(var i in new_strokes)
{var x=new_strokes[i];var wait=0;var S=live.strokes[x];wait=(S.time-live.strokes[new_strokes[0]].time)*factor;if(wait>2000+i*3)
wait=2000+i*3;if(!ret.wrong_time&&S.in_bounds&&wait>0)
wait+=Math.sqrt(i*10);else
wait=0;live.marker.add_delay(x,wait);if(typeof strokes_visible[S.src]=='undefined')
strokes_visible[S.src]=false;strokes_visible[S.src]|=S.in_bounds&&live.data.stroke_is_visible(S);}
var delay_new=0;for(s in strokes_visible)
{if(typeof live.data.delay_src[s]=="undefined")
live.data.delay_src[s]=0;if(typeof live.data.time_last[s]=="undefined")
live.data.time_last[s]=0;if(typeof min_delay[s]=="undefined")
min_delay[s]=0;if(typeof ret.flags=="undefined")
ret.flags={};if(typeof ret.flags[s]=="undefined")
ret.flags[s]=0;if((strokes_visible[s]&&!(ret.flags[s]&6))||!live.data.delay)
{if(!live.data.delay_src[s]&&min_delay[s])
{live.data.delay_src[s]=min_delay[s];}
else if(t-live.data.time_last[s]<60&&t-live.data.time_last[s]>0&&live.data.loops>2)
{live.data.delay_src[s]=(live.data.delay_src[s]*4-live.data.time_last[s]+t)/5;}}
if(delay_new==0||delay_new>live.data.delay_src[s])
delay_new=live.data.delay_src[s];}
if(delay_new)
{if(delay_new>live.data.delay*1.1)
live.data.delay=(live.data.delay*10+delay_new)/11;else
live.data.delay=delay_new;$("#delay").html(live.data.delay.toFixed(1)+'s');}}
live.data.update_info();}
live.data.update_info=function()
{var text="conn: "+(live.data.connection==1?live.data.ws_server+"/"+live.data.ws_port:"xhr/"+live.data.xhr_server)
+" err: "+live.data.ws_errs+"/"+live.data.xhr_errs
+" str: "+live.data.strokes_saved
+" info: "+live.data.loops+"s/"+live.data.count;text+="<table border=0 cellpadding=2 cellspacing=0>";text+="<tr><th>Source</th><th>Delay</th><th>Rate</th></tr>";for(s in live.data.delay_src)
{text+="<tr><th>"+s+":</th>";text+="<td>"+live.data.delay_src[s].toFixed(1)+"s</td>";text+="<td>"+(typeof live.data.rate_src[s]!="undefined"?live.data.rate_src[s].toFixed(1):"")+"/min</td>";text+="</tr>";}
text+="</table>";$("#stroke_status_info").html(text);}
live.data.stroke_age=function(S)
{return Math.round(t-S.time-live.data.delay);}
live.data.is_rate_high=function()
{return live.data.rate>=live.config.rate_high;}
live.marker={};live.marker.markers=[];live.marker.accCircles=[];live.marker.num=0;live.marker.num_acc=0;live.marker.num_check=0;live.marker.num_check_strokes=0;live.marker.check_all_last=0;live.marker.num_drawing=0;live.marker.sleeps=0;live.marker.init=function()
{for(i=0;i<live.config.max_stroke_markers;i++)
live.marker.markers[i]=null;for(i=0;i<live.config.max_stroke_accuracy_markers;i++)
live.marker.accCircles[i]=null;setTimeout(live.marker.check,3000);}
live.marker.add_delay=function(i,wait)
{if(live.data.loops<8||wait<200||wait>5000)
live.marker.add(i);else
setTimeout('live.marker.add('+i+');',wait);}
live.marker.add=function(i)
{var S=live.strokes[i];if(!live.data.stroke_is_visible(S))
return false;var in_bounds=live.map.getBounds().contains(S.pos);var is_new=false;if(!in_bounds)
return false;live.marker.num_drawing++;live.marker.show(S);if(live.data.stroke_age(S)<=5)
{if(!live.thunder.show(S))
live.circles.show(S);live.sound.play(S);live.detectors.lines_stroke_add(i);is_new=true;}
live.marker.num_drawing--;return is_new;}
live.marker.icon_style=function(S)
{var a=live.data.stroke_age(S);if(a<0)
a=0;var str_sec=live.config.marker_stroke_seconds;var mark_sec=live.config.max_stroke_marker_age;if(a>=mark_sec)
return null;var z=live.map.getZoom();var cache_name='c'+z+'_'+a+'_'+str_sec+'_'+mark_sec+'_'+S.src+'_'+(live.config.no_transparency?1:0);var fill,stroke;var p=a/mark_sec;if(S.src==1)
{fill='rgb('+Math.ceil((p*0.2)*255)+','+Math.ceil((1-p*0.2)*255)+','+Math.ceil((1-p*0.3)*255)+')';stroke='#44f';}
else if(S.src==2)
{fill='rgb('+Math.ceil((1-p*0.02)*255)+','+Math.ceil((1-p*0.3)*255)+','+Math.ceil(p*10)+')';stroke='#f00';}
else if(S.src==3)
{fill='rgb('+Math.ceil((0.3-p*0.3)*255)+','+Math.ceil((0.3-p*0.3)*255)+','+Math.ceil(1-p*0.3)*255+')';stroke='#0f0';}
else
{fill='rgb('+Math.ceil(p*0.3*255)+','+Math.ceil(p*0.3*255)+','+Math.ceil(p*0.3*255)+')';stroke='#666';}
return{radius:(2.5+(z-5)/5.5)*(a<str_sec?(str_sec-a)/str_sec*0.2+1:1),fill:true,fillColor:fill,fillOpacity:live.config.no_transparency?1.0:(1.0-p*0.1),stroke:true,color:stroke,opacity:live.config.no_transparency?1.0:(a<str_sec?(str_sec-a)/str_sec*0.8+0.2:0),weight:a<str_sec?(str_sec-a)/str_sec*(z*z)/55+1.3:0,pane:'strokes',interactive:false};}
live.marker.set_invisible=function(M)
{if(M!=null&&"setStyle"in M)
M.setStyle({fillOpacity:0,opacity:0});}
live.marker.set_visible=function(M)
{if(M!=null&&"setStyle"in M)
M.setStyle({fillOpacity:1,opacity:1});}
live.marker.is_visible=function(M)
{if(M==null)
return null;if(!("options"in M))
return null;if(M.options.fillOpacity!=0.0||M.options.opacity!=0.0)
return true;return false;}
live.marker.show=function(S,exit_if_full,icon)
{var M=null;var is_full=true;if(S.Marker!=null)
{return false;}
if(!icon)
icon=live.marker.icon_style(S);if(icon==null)
{live.debug('New marker: Stroke is too old!');return false;}
for(var i in live.marker.markers)
{M=live.marker.markers[i];if(M!=null)
{if(!live.marker.is_visible(M))
{is_full=false;break;}
M=null;}}
if(M==null)
{live.marker.num=(live.marker.num+1)%live.config.max_stroke_markers;M=live.marker.markers[live.marker.num];}
if(M==null)
{live.marker.markers[live.marker.num]=L.circleMarker(S.pos,icon).addTo(live.map);M=live.marker.markers[live.marker.num];M.last_update=new Date().getTime();M.circle=null;is_full=false;}
else
{if(is_full&&exit_if_full)
return is_full;live.marker.hide(M);M.setStyle(icon);M.setLatLng(S.pos);M.redraw();M.bringToFront();if(!live.marker.is_visible(M))
live.marker.set_visible(M)}
if(is_full)
live.debug("full");M.Stroke=S;S.Marker=M;return is_full;}
live.marker.update=function(M)
{if(!M)
return false;if(typeof M.Stroke=='undefined'||M.Stroke==null)
{live.debug('null');return false;}
var icon=live.marker.icon_style(M.Stroke);if(icon!==null)
{M.setStyle(icon);live.marker.accuracy_set(M);return true;}
else
{live.marker.hide(M);live.debug('Hide');return false;}}
live.marker.unlink=function(M)
{if(typeof M.Stroke!='undefined')
{if(M.Stroke!=null)
{M.Stroke.Marker=null;M.Stroke=null;}}}
live.marker.hide=function(M)
{if(!M)
return;live.marker.accuracy_del(M);live.marker.set_invisible(M);live.thunder.stroke_deleted(M.Stroke);live.detectors.stroke_deleted(M.Stroke);live.marker.unlink(M);}
live.marker.check=function()
{if(live.marker.num_check>=live.config.max_stroke_markers)
live.marker.num_check=0;if(live.archive.is_enabled())
{setTimeout(live.marker.check,1000);return;}
if((!live.is_visible()||!live.window_is_focused)&&live.marker.num_check==0&&live.marker.sleeps<live.config.marker_background_update_sec)
{setTimeout(live.marker.check,1000);live.marker.sleeps++;return;}
var updated=0;var msec=live.data.is_rate_high()?live.config.marker_msec_update_rate_high:live.config.marker_msec_update;while(updated<live.config.max_stroke_markers_check&&live.marker.num_check<live.config.max_stroke_markers)
{var now=new Date().getTime();var M=live.marker.markers[live.marker.num_check];live.marker.num_check++;if(M==null)
continue;if(now-M.last_update<msec)
continue;if(!live.marker.is_visible(M))
continue;M.last_update=now+Math.random()*msec/10;try
{if(live.map.getBounds().contains(M.getLatLng())&&live.data.stroke_is_visible(M.Stroke))
{live.marker.update(M);}
else
{live.marker.hide(M);}}
catch(e)
{console.log("marker update: "+e);}
updated++;}
live.marker.check_strokes(false);setTimeout(live.marker.check,100);}
live.marker.stroke_deleted=function(S)
{if(!S)
return;if(typeof(S.Marker)!='undefined')
{live.marker.hide(S.Marker);}}
live.data.strokes_in_bounds=0;live.data.strokes_in_bounds_now=0;live.data.strokes_in_bounds_src={};live.data.strokes_in_bounds_now_src={};live.marker.check_strokes=function(all)
{var is_full=false;var start,end;var max_age=60;if(!live.data.rate)
all=true;if(live.data.rate>50)
{if(live.data.rate>200)
max_age=25;else
max_age=60-(live.data.rate-50)/150*35;}
if(all)
{var now=new Date().getTime();if(now-live.marker.check_all_last<500)
return;start=0;end=live.config.max_strokes;live.marker.num_check_strokes=0;live.marker.check_all_last=now;}
else
{start=live.marker.num_check_strokes;end=start+live.config.max_strokes_check;live.marker.num_check_strokes=end%live.config.max_strokes;}
var str_in_bounds_tmp=-1,str_in_bounds_tmp_src={};for(var i=start;i<end;i++)
{var pos=i%live.config.max_strokes
if(pos==0)
{str_in_bounds_tmp=live.data.strokes_in_bounds_now;live.data.max_age_current_last=live.data.max_age_current;for(s in live.data.strokes_in_bounds_now_src)
str_in_bounds_tmp_src[s]=live.data.strokes_in_bounds_now_src[s];for(s in live.data.strokes_in_bounds_now_src)
live.data.max_age_current_last_src[s]=live.data.max_age_current_src[s];live.data.strokes_in_bounds=0;live.data.strokes_in_bounds_now=0;live.data.strokes_in_bounds_src={};live.data.strokes_in_bounds_now_src={};live.data.max_age_current=0;live.data.max_age_current_src={};}
var S=live.strokes[pos];if(S==null)
continue;if(!S.pos)
continue;if(!live.map.getBounds().contains(S.pos))
continue;if(!live.data.stroke_is_visible(S))
{live.marker.stroke_deleted(S);continue;}
var s=S.src;if(typeof live.data.strokes_in_bounds_src[s]=="undefined")
{live.data.strokes_in_bounds_src[s]=0;live.data.strokes_in_bounds_now_src[s]=0;live.data.max_age_current_src[s]=0;}
live.data.strokes_in_bounds++;live.data.strokes_in_bounds_src[s]++;var age=live.data.stroke_age(S);if(age<max_age)
{live.data.strokes_in_bounds_now++;live.data.strokes_in_bounds_now_src[s]++;if(age>live.data.max_age_current)
live.data.max_age_current=age;if(age>live.data.max_age_current_src[s])
live.data.max_age_current_src[s]=age;}
if(age<live.config.max_stroke_marker_age&&!is_full&&live.data.loops>5)
{if(age>3)
{is_full=live.marker.show(S,true);live.thunder.show(S);}}}
var factor=0.005;if(all)
{live.data.max_age_current_last=live.data.max_age_current;str_in_bounds_tmp=live.data.strokes_in_bounds_now;for(s in live.data.strokes_in_bounds_now_src)
{str_in_bounds_tmp_src[s]=live.data.strokes_in_bounds_now_src[s];live.data.max_age_current_last_src[s]=live.data.max_age_current_src[s];}
factor=0.95;}
if(str_in_bounds_tmp>=0)
{var age=max_age;var age_fallback=0.9;if(live.data.max_age_current_last<age*age_fallback)
{age=live.data.max_age_current_last;}
if(age>0)
live.data.rate=live.data.rate*(1-factor)+(str_in_bounds_tmp/age*60)*factor;else
live.data.rate=live.data.rate*(1-factor);var rate=0;for(s in live.data.strokes_in_bounds_now_src)
{var age=max_age;if(live.data.max_age_current_last_src[s]<age*age_fallback)
{age=live.data.max_age_current_last_src[s];}
if(typeof live.data.rate_src[s]=="undefined")
live.data.rate_src[s]=0;if(age>0)
live.data.rate_src[s]=live.data.rate_src[s]*(1-factor)+(str_in_bounds_tmp_src[s]/age*60)*factor;else
live.data.rate_src[s]=live.data.rate_src[s]*(1-factor);if(live.data.rate_src[s]>rate)
rate=live.data.rate_src[s];}
if(rate==0)
rate=live.data.rate;$("#str_rate").html(rate.toFixed(rate<10?1:0)+"/min ");}}
live.marker.accuracy_del=function(M)
{if(!M)
return;if(M.circle)
{live.map.removeLayer(M.circle);M.circle=null;}}
live.marker.accuracy_set=function(M)
{if(!M)
return;if(live.map.getZoom()<live.config.zoom_accuracy_circles||!M.Stroke)
{live.marker.accuracy_del(M);return false;}
var C=null;var i=0;if(M.circle)
{C=M.circle;C.setLatLng(M.Stroke.pos);C.redraw();}
else
{for(i in live.marker.accCircles)
{C=live.marker.accCircles[i];if(C==null)
break;if(!live.marker.is_visible(C))
break;}
if(C==null)
{C=live.marker.accCircles[i]=L.circle(M.Stroke.pos,{pane:'accurac'}).addTo(live.map);}
M.circle=C;}
C.setStyle({color:M.options.fillColor,opacity:1,weight:1.2,fillOpacity:0});C.setRadius(M.Stroke.dev/2);return true;}
live.marker.hide_all=function()
{for(i in live.marker.markers)
live.marker.hide(live.marker.markers[i]);}
live.circles={};live.circles.markers=[];live.circles.num=0;live.circles.updating=false;live.circles.show=function(S,time)
{if(!S.pos||!live.is_visible())
return false;var C;var now=new Date();var icon={radius:6,stroke:true,color:'#fff',opacity:1.0,weight:0.5+live.map.getZoom()/10,fillOpacity:0,interactive:false,pane:'circles'};live.circles.num=(live.circles.num+1)%live.config.max_circles;if(typeof live.circles.markers[live.circles.num]=='undefined')
{C=live.circles.markers[live.circles.num]=L.circleMarker(S.pos,icon).addTo(live.map);}
else
{C=live.circles.markers[live.circles.num];C.setStyle(icon);C.setLatLng(S.pos);C.redraw();}
C.bringToFront();C.time=time;if(!live.circles.updating)
{live.circles.updating=true;setTimeout(live.circles.update,10);}}
live.circles.update=function()
{var count=0;var now=new Date();for(i in live.circles.markers)
{var C=live.circles.markers[i];if(!live.marker.is_visible(C))
continue;var icon={color:'#fff',fillOpacity:0};var smoothy=(now.getTime()-C.time)/50*2;if(!smoothy)smoothy=2;C.time=now.getTime();icon.radius=Math.round(C.getRadius()*Math.pow(1.04,smoothy));icon.strokeOpacity=live.config.no_transparency?1.0:(icon.radius>15?1-(icon.radius-15)/15:1);icon.strokeWeight=icon.radius>15?1.5-(icon.radius-15)/15*1.5:1.5;if(icon.radius>=20||isNaN(icon.radius))
{live.marker.set_invisible(C);}
else
{C.setStyle(icon);count++;}}
if(count)
setTimeout(live.circles.update,live.data.is_rate_high()?live.config.marker_circle_msec_update_rate_high:live.config.marker_circle_msec_update);else
live.circles.updating=false;}
live.thunder={};live.thunder.status_level=1;live.thunder.visible=false;live.thunder.circles=[];live.thunder.num_circles=0;live.thunder.init=function()
{live.thunder.set(null);live.thunder.check();}
live.thunder.set=function(status)
{var zoom_old=live.thunder.zoom_min;if(status==null)
{if(live.config.get('t')>0)
status=live.config.get('t')-1;else if(is_mobile())
status=1;else
status=2;}
switch(status)
{case 0:live.thunder.zoom_min=999;break;case 1:live.thunder.delay=300;live.thunder.count_max=20;live.thunder.dist_max=15000;live.thunder.dist_max_transp=9000;live.thunder.zoom_min=10;break;default:case 2:live.thunder.delay=200;live.thunder.count_max=50;live.thunder.dist_max=18000;live.thunder.dist_max_transp=9000;live.thunder.zoom_min=9;break;case 3:live.thunder.delay=100;live.thunder.count_max=1000;live.thunder.dist_max=25000;live.thunder.dist_max_transp=18000;live.thunder.zoom_min=8;break;}
var visible=live.map.getZoom()>=live.thunder.zoom_min;if(live.thunder.visible&&!visible)
live.message.show('Thunder invisible',2000);else if(!live.thunder.visible&&visible)
live.message.show('Thunder visible',2000);live.config.set('t',status+1);live.thunder.status_level=status;live.thunder.visible=visible;for(var i=0;i<live.thunder.count_max;i++)
{if(typeof live.thunder.circles[i]=='undefined')
live.thunder.circles[i]=null;}}
live.thunder.status=function()
{return live.thunder.status_level;}
live.thunder.show=function(S)
{if(!live.thunder.visible)
return false;if(!S.pos)
return false;if(typeof S.Thunder!='undefined'&&S.Thunder!=null)
return true;var i,rad_min=0,i_found=-1,C;var time=new Date().getTime()-(t-S.time)*1000;var radius=live.thunder.radius(time);if(radius===false)
return false;for(var i in live.thunder.circles)
{if(i>=live.thunder.count_max)
break;C=live.thunder.circles[i];if(C==null)
{i_found=i;break;}
if(live.marker.is_visible(C)==null)
{i_found=i;break;}
if(C.getRadius()&&C.getRadius()>rad_min&&C.getRadius()>radius)
{rad_min=C.getRadius();i_found=i;}}
if(i_found==-1)
return false;C=live.thunder.circles[i_found];if(C==null)
{live.thunder.circles[i_found]=L.circle(S.pos,{radius:1,color:'#fff',opacity:1,weight:1,fillColor:'#000',fillOpacity:0,interactive:false,}).addTo(live.map);C=live.thunder.circles[i_found];}
else
{if(C.Stroke)
{live.thunder.remove(C);}
C.setLatLng(S.pos);}
C.time=time;C.Stroke=S;S.Thunder=C;return live.thunder.circle_update(C);}
live.thunder.check=function()
{if(!live.is_visible())
{setTimeout(live.thunder.check,500);return;}
for(var i in live.thunder.circles)
{var C=live.thunder.circles[i];if(C==null)
continue;if(!live.thunder.visible||i>=live.thunder.count_max)
{live.thunder.remove(C);}
else
{live.thunder.circle_update(C);}}
setTimeout(live.thunder.check,live.thunder.delay);return;}
live.thunder.radius=function(time)
{var rad=(new Date().getTime()-time)/1000*330;if(rad>live.thunder.dist_max)
return false;if(rad<=0)
rad=330;return rad;}
live.thunder.circle_options=function(rad)
{var opac;if(live.tiles.overlays.radar.visible())
opac=0;else if(live.config.no_transparency)
opac=1.0;else
opac=rad>live.thunder.dist_max_transp?0:0.4-rad/live.thunder.dist_max_transp*0.4;return{opacity:live.config.no_transparency?1.0:(0.9-rad/live.thunder.dist_max*0.9),weight:1.5+rad/live.thunder.dist_max*6,fillOpacity:opac,};}
live.thunder.circle_update=function(C)
{if(C==null)
return;if(!C.Stroke)
return;var rad=live.thunder.radius(C.time);if(rad==false||!live.map.getBounds().contains(C.getLatLng()))
{live.thunder.remove(C);return false;}
C.setRadius(rad);C.setStyle(live.thunder.circle_options(rad));return rad;}
live.thunder.remove=function(C)
{if(typeof C.Stroke!='undefined'&&C.Stroke!=null)
{if(typeof C.Stroke.Thunder!='undefined')
C.Stroke.Thunder=null;C.Stroke=null;}
live.marker.set_invisible(C);}
live.thunder.stroke_deleted=function(S)
{if(!S)
return;if(typeof S.Thunder!='undefined'&&S.Thunder!=null)
live.thunder.remove(S.Thunder);}
live.fullscreen={};live.fullscreen.init=function()
{if(live.config.get('f')==true)
live.fullscreen.toggle(true);live.fullscreen.check();}
live.fullscreen.possible=function()
{return(document.fullscreenEnabled||document.msFullscreenEnabled||document.mozFullScreenEnabled||document.webkitFullscreenEnabled);}
live.fullscreen.is_enabled=function()
{return document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement;}
live.fullscreen.check=function()
{setTimeout(function(){live.config.set('f',live.fullscreen.is_enabled()?true:false);},1000);}
live.fullscreen.toggle=function(on)
{var elem=document.getElementById("InnerContent");if(!live.fullscreen.is_enabled()&&on)
{if(elem.requestFullscreen)
elem.requestFullscreen();else if(elem.msRequestFullscreen)
elem.msRequestFullscreen();else if(elem.mozRequestFullScreen)
elem.mozRequestFullScreen();else if(elem.webkitRequestFullscreen)
elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);}
else
{if(document.exitFullscreen)
document.exitFullscreen();else if(document.msExitFullscreen)
document.msExitFullscreen();else if(document.mozCancelFullScreen)
document.mozCancelFullScreen();else if(document.webkitExitFullscreen)
document.webkitExitFullscreen();}}
live.detectors={};live.detectors.enabled=false;live.detectors.level=1;live.detectors.lines_enabled=false;live.detectors.lines_level=1;live.detectors.coverage_enabled=false;live.detectors.stations=[];live.detectors.loaded=0;live.detectors.loaded_last=0;live.detectors.lines=[];live.detectors.lines_pos=0;live.detectors.checks=0;live.detectors.show_timeout=0;live.detectors.load_stations=false;live.detectors.config_loaded=false;live.detectors.config_update=function()
{try{live.detectors.image.attr('src','/Images/station_'+(live.detectors.lines_enabled||live.detectors.enabled?'blue':'black')+'.png');}catch(e){}
if(live.detectors.config_loaded)
{var a;a=(live.detectors.enabled?1:0)+(live.detectors.level<<1);live.config.set('d',a);$("input[name='detectors_level'][value="+(live.detectors.enabled?a:0)+"]").prop("checked",true);a=(live.detectors.lines_enabled?1:0)+(live.detectors.lines_level<<1);live.config.set('dl',a);$("input[name='detector_lines_level'][value="+(live.detectors.lines_enabled?a:0)+"]").prop("checked",true);live.config.set('dc',live.detectors.coverage_enabled?1:0);$("input[name='detector_coverage'][value="+(live.detectors.coverage_enabled?1:0)+"]").prop("checked",true);}
live.detectors.config={'show':true,'show_all':false,'show_labels':false,'color_on_stroke':false,'lines_show_used':false,'lines_show_assigned':false,'lines_show_stations_used':false,'lines_show_stations_assigned':false,'lines_max_num':500,'lines_max_per_strike':40,'lines_check_msec':1000,'lines_glow_msec':0,'lines_hide_msec':500,'lines_geodesic':false,'lines_color_type':1};if(live.detectors.level>=2)
{live.detectors.config.color_on_stroke=true;}
if(live.detectors.level>=3)
{live.detectors.config.show_all=true;}
if(live.detectors.level>=4)
{live.detectors.config.show_labels=true;}
if(live.detectors.lines_level>=1)
{live.detectors.config.lines_show_used=true;}
if(live.detectors.lines_level>=2)
{live.detectors.config.lines_show_assigned=true;live.detectors.config.lines_show_stations_used=true;live.detectors.config.lines_glow_msec=1000;live.detectors.config.lines_hide_msec=30000;live.detectors.config.lines_geodesic=true;live.detectors.config.lines_color_type=2;}
if(live.detectors.lines_level>=3)
{live.detectors.config.lines_show_stations_assigned=true;}
if(live.detectors.lines_level>=4)
{live.detectors.config.lines_max_per_strike=200;live.detectors.config.lines_hide_msec=300000;live.detectors.config.lines_max_num=5000;}
if(live.detectors.level<=2&&live.detectors.lines_enabled&&live.map.getZoom()<8)
{live.detectors.config.show=false;}
live.detectors.load_stations=live.detectors.lines_enabled||(live.detectors.lines_enabled&&live.detectors.config.lines_show_used);}
live.detectors.init=function()
{live.detectors.config_update();live.detectors.config_loaded=true;if(!live.detectors.control)
return;setTimeout(function(){live.detectors.check();},2000);}
live.detectors.addControl=function()
{L.Control.DetectorSettings=L.Control.extend({onAdd:function(map){live.detectors.control=document.createElement('div');live.detectors.control.title='';live.detectors.control.className='live_ctrl';live.detectors.control.index=3;live.detectors.control.id='ctrl_st';L.DomEvent.disableClickPropagation(live.detectors.control);$(live.detectors.control).on("mouseenter touchstart",function(){if(!$("#live_ctrl_detectors").length)
{$(".ctrl_detail").remove();live.detectors.description($(this));}}).on("mouseleave",function(){$(this).find(".ctrl_detail").remove();}).append(live.detectors.button());return live.detectors.control;},onRemove:function(map){}});live.control.station_settings=function(opts){return new L.Control.DetectorSettings(opts);}
live.control.station_settings({position:'topright'}).addTo(live.map);live.detectors.toggle(live.config.get('d'));live.detectors.lines_toggle(live.config.get('dl'));live.detectors.coverage_toggle(live.config.get('dc'));}
live.detectors.button=function(){live.detectors.image=$('<img id="live_detector_img" src="/Images/station_black.png">');live.detectors.image.append('<img src="/Images/station_blue.png" style="display:none"><img src="/Images/station_black.png" style="display:none">');if(!is_mobile())
{live.detectors.image.on('click',function()
{setTimeout(function(){live.detectors.toggle(live.detectors.enabled||live.detectors.lines_enabled?0:1);live.detectors.lines_toggle(live.detectors.enabled||live.detectors.lines_enabled?0:1);live.detectors.config_update();},1);return false;});}
return live.detectors.image;}
live.detectors.description=function(elem)
{var e=$("<div class='ctrl_detail' id='live_ctrl_detectors'></div>");e.append("<form class='live_set' id='live_set_detectors'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_stations_level+":</span> "
+" <span class='live_set_group' id='detectors_radios'><label for='detectors_level_off'>"+lm_lang.lm_live_stations_level_off+"</label>"
+"<input type='radio' value='0' name='detectors_level' id='detectors_level_off' checked>"
+"<input type='radio' value='3' name='detectors_level' id='detectors_level1'>"
+"<input type='radio' value='5' name='detectors_level' id='detectors_level2'>"
+"<input type='radio' value='7' name='detectors_level' id='detectors_level3'>"
+"<input type='radio' value='9' name='detectors_level' id='detectors_level4'>"
+"<label for='detectors_level4'> "+lm_lang.lm_live_stations_level_max+"</label>"
+"</span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_stations_level_info+"</div>"
+"</form>");e.append("<form class='live_set' id='live_set_detector_lines'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_stations_lines+":</span> "
+"<span class='live_set_group' id='detectors_lines_radios'><label for='detectors_level_off'>"+lm_lang.lm_live_stations_lines_off+"</label>"
+"<input type='radio' value='0' name='detector_lines_level' id='detector_lines_level_off' checked>"
+"<input type='radio' value='3' name='detector_lines_level' id='detector_lines_level1'>"
+"<input type='radio' value='5' name='detector_lines_level' id='detector_lines_level2'>"
+"<input type='radio' value='7' name='detector_lines_level' id='detector_lines_level3'>"
+"<input type='radio' value='9' name='detector_lines_level' id='detector_lines_level4'>"
+"<label for='detector_lines_level4'> "+lm_lang.lm_live_stations_lines_max+"</label>"
+"</span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_stations_lines_info+"</div>"
+"</form>");e.append("<form class='live_set' id='live_set_detector_coverage'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_stations_coverage+":</span> "
+"<span class='live_set_group' id='detectors_coverage_radios'><label for='detectors_level_off'>"+lm_lang.lm_live_stations_coverage_off+"</label>"
+"<input type='radio' value='0' name='detector_coverage' id='detector_coverage_off' checked>"
+"<input type='radio' value='1' name='detector_coverage' id='detector_coverage_on'>"
+"<label for='detector_coverage_on'> "+lm_lang.lm_live_stations_coverage_on+"</label>"
+"</span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_stations_coverage_info+" <a href='/extra/coverage'>more</a></div>"
+"</form>");e.append("<div class='live_ctrl_hint'>"+lm_lang.lm_live_stations_hint+"</div>");elem.append(e);$("#detectors_radios input").on('click touchstart',function(e){live.detectors.toggle($("input[name='detectors_level']:checked").val());});$("#detectors_lines_radios input").on('click touchstart',function(e){live.detectors.lines_toggle($("input[name='detector_lines_level']:checked").val());});$("#detectors_coverage_radios input").on('click touchstart',function(e){live.detectors.coverage_toggle($("input[name='detector_coverage']:checked").val());});live.detectors.config_update();}
live.detectors.coverage_toggle=function(on)
{live.detectors.coverage_enabled=on==1?true:false;live.detectors.config_update();for(var i in live.detectors.stations)
{live.detectors.stations[i].refresh=true;live.detectors.show_marker(live.detectors.stations[i],0);}}
live.detectors.lines_toggle=function(on)
{live.detectors.lines_enabled=(on&1)?true:false;if(on>1)
live.detectors.lines_level=on>>1;live.detectors.config_update();if(!live.detectors.lines_enabled)
live.detectors.lines_hide_all();live.detectors.show();live.data.update('l');}
live.detectors.toggle=function(on)
{live.detectors.enabled=(on&1)?true:false;if(on>1)
live.detectors.level=on>>1;live.detectors.config_update();live.detectors.show();}
live.detectors.show=function()
{if(live.detectors.enabled&&live.detectors.config.show)
{for(var i in live.detectors.stations)
live.detectors.show_marker(live.detectors.stations[i],0);}
else
{for(var i in live.detectors.stations)
live.detectors.show_marker(live.detectors.stations[i],-1);}}
live.detectors.map_changed_view=function()
{if(live.detectors.show_timeout)
clearTimeout(live.detectors.show_timeout);live.detectors.show_timeout=setTimeout(function(){live.detectors.config_update();live.detectors.show();},2000);}
live.detectors.check=function()
{live.detectors.load_all();live.detectors.markers_check();live.detectors.lines_check();live.detectors.checks++;setTimeout(live.detectors.check,100);}
live.detectors.load_all=function()
{if(live.detectors.coverage_enabled||live.detectors.lines_enabled||live.detectors.enabled)
{for(var i=0;i<3;i++)
{if(live.is_map_in_region(i))
live.detectors.load(i);}}}
live.detectors.load=function(r)
{var now=new Date();var timeid=Math.floor(now.getTime()/1000/900);if((live.detectors.loaded&(1<<r))&&timeid==live.detectors.loaded_last)
return;live.detectors.loaded_last=timeid;live.detectors.loaded|=(1<<r);var xhr=new XMLHttpRequest();xhr.open('GET',urls[r]+'?stations_json&'+timeid,true);xhr.onload=function()
{if(this.readyState==4&&this.status==200)
{var tmp=JSON.parse(this.responseText);live.user=tmp['user'];for(var i in tmp['stations'])
{if(typeof live.detectors.stations[i]=='undefined')
live.detectors.stations[i]={};var D=live.detectors.stations[i];var station=tmp['stations'][i];if("status"in D&&"Marker"in D)
{if(D.status==30&&D.Marker.region!=r)
continue;D.Marker.removeFrom(live.map);}
if(live.user)
{D.pos=[station[0],station[1]];}
else
{D.pos=[station[0]+(Math.random()-0.5)*0.01,station[1]+(Math.random()-0.5)*0.01];}
D.lines_count=0;D.line_connected=0;D.city="c"in station?station.c:"";D.country="C"in station?station.C:"";D.alt="a"in station?station.a:null;D.status="s"in station?station.s:i;D.refresh=true;D.coverage_markers=[];D.last_update_assign=0;D.last_update_calc=0;D.Marker=L.circleMarker(D.pos,{interactive:true,opacity:0,radius:0,bubblingMouseEvents:false,pane:'stations'}).addTo(live.map);D.Marker.stid=i;D.Marker.region=r;D.Marker.title="c"in station?station.c:"#"+i;D.Marker.bindTooltip(D.city?D.city:"#"+i,{className:"station_label"});D.Marker.on('dblclick',function(e){var url=urls[this.region]+'?bo_page=statistics&bo_show=station&bo_sid='+this.stid;if(confirm('Open statistics page for station '+this.stid+'?'))
window.open(url,'_blank');return false;});}}};xhr.send(null);}
live.detectors.markers_check=function()
{var now=new Date().getTime();for(var i in live.detectors.stations)
{if((i%5)!=(live.detectors.checks%5))
continue;var D=live.detectors.stations[i];if(typeof(D.Marker)=='undefined')
continue;if(D.refresh||((D.lines_count<=0||!live.detectors.lines_enabled)&&D.line_connected&&now-D.last_update_calc>500&&now-D.last_update_assign>200))
{live.detectors.show_marker(D,0);}
else if(!live.detectors.enabled)
{if(D.Marker.opacity>0)
{D.Marker.setStyle({opacity:0});D.Marker.redraw();}}}}
live.detectors.show_marker=function(D,status)
{if(!D)
return;var m=D.Marker;var scale=(live.map.getZoom()/3);var color;var opac=0,zindex=0;var now=new Date().getTime();D.refresh=false;var cache_name='sta'+status+'_'+live.map.getZoom()+'_'+(live.config.no_transparency?1:0);if(status==-1)
{live.marker.set_invisible(D.Marker);return;}
else if(D.line_connected==2&&status==1)
{D.last_update_assign=now;return;}
else if(status==0)
{if(live.detectors.coverage_enabled&&!D.coverage_markers.length)
{for(var i=0;i<3;i++)
{var r,col;switch(i)
{case 0:r=2000;col='rgb(255, 0, 0)';op=0.01;break;case 1:r=500;col='rgb(0, 0, 255)';op=0.04;break;case 2:r=150;col='rgb(0, 255, 0)';op=0.06;break;default:continue;}
D.coverage_markers[i]=L.circle(D.pos,{radius:r*1000,interactive:false,color:'#fff',opacity:0,weight:0,fillColor:col,fillOpacity:op,pane:'coverage'}).addTo(live.map);}}
else if(!live.detectors.coverage_enabled&&D.coverage_markers.length)
{for(i in D.coverage_markers)
live.map.removeLayer(D.coverage_markers[i]);D.coverage_markers=[];}
if(live.detectors.config.show_labels&&live.map.getZoom()>4&&live.map.getBounds().contains(D.pos))
{if(!m.isTooltipOpen())
{m.openTooltip();}}
else
{if(m.isTooltipOpen())
{m.closeTooltip();}}
if(!D.line_connected)
{if(!live.detectors.config.show||!live.detectors.enabled)
return;if((!live.detectors.config.show_all&&!(D.status>=30&&D.status<40))||!live.map.getBounds().contains(D.pos))
{live.marker.set_invisible(m);return;}}
if(D.status>=30&&D.status<40)
{zindex=3;cache_name+='_s30';opac=0.25;color='rgb(50, 150, 50)';}
else if(D.status<10)
{zindex=0;cache_name+='_s0';opac=0.15;color='rgb(30, 30, 30)';}
else if(D.status>=40||(D.status>=20&&D.status<30))
{zindex=2;cache_name+='_s_idle';opac=0.2;color='rgb(10, 100, 210)';}
else
{zindex=1;cache_name+='_s_offline';opac=0.15;color='rgb(230, 20, 20)';}
D.lines_count=0;D.line_connected=0;}
else if(status==1&&(live.detectors.lines_enabled&&live.detectors.config.lines_show_stations_assigned))
{zindex=5;opac=0.7;color='rgb(50, 255, 50)';D.line_connected=1;D.last_update_assign=now;}
else if(status==2&&(live.detectors.config.color_on_stroke||live.detectors.config.lines_show_stations_used))
{zindex=6;opac=0.7;color='rgb(255, 0, 255)';D.line_connected=2;D.last_update_calc=now;}
else
return;if(typeof m.options.fillOpacity=='undefined'||m.options.fillOpacity!=opac||m.getRadius()!=scale||m.options.fillColor!=color)
{m.setRadius(scale);m.bringToFront();m.setStyle({fillColor:color,fillOpacity:live.config.no_transparency?1:opac,weight:0.3+live.map.getZoom()/8,color:color,opacity:live.config.no_transparency?1:1,});}}
live.detectors.hide=function()
{for(var i in live.detectors.stations)
live.detectors.show_marker(live.detectors.stations[i],-1);}
live.detectors.unhide=function()
{for(var i in live.detectors.stations)
live.detectors.show_marker(live.detectors.stations[i],0);}
live.detectors.lines_check=function()
{if(!live.detectors.lines_enabled)
return;for(var i in live.detectors.lines)
{if((i%5)!=(live.detectors.checks%5))
continue;var P=live.detectors.lines[i];if(!P.time_start)
continue;var now=new Date().getTime();var diff_start=now-P.time_start;var diff_change=now-P.time_changed;if(diff_change<=live.detectors.config.lines_check_msec)
continue;if(diff_start>=live.detectors.config.lines_hide_msec||!live.detectors.config.lines_hide_msec||!live.detectors.lines_enabled)
{live.detectors.lines_hide_station(P);P.time_changed=now;P.time_start=0;live.marker.set_invisible(P);}
else if(diff_start>=live.detectors.config.lines_glow_msec&&!P.glowing&&live.detectors.config.lines_glow_msec)
{live.detectors.lines_hide_station(P);P.time_changed=now;P.glowing=true;if(P.options.opacity>0.1)
{P.setStyle({opacity:live.config.no_transparency?0.0:0.1,weight:0.8,});}}}}
live.detectors.lines_hide_all=function()
{var now=new Date().getTime();for(var i in live.detectors.lines)
{try{var P=live.detectors.lines[i];P.time_changed=now;P.time_start=0;live.marker.set_invisible(P);}catch(e){}}}
live.detectors.lines_stroke_add=function(i)
{if(typeof live.strokes[i]=='undefined')
return;if(!live.is_visible()&&!live.detectors.config.lines_glow_msec)
{return;}
var S=live.strokes[i];if(typeof S.stations=='undefined')
return;if(!live.detectors.lines_enabled&&!live.detectors.config.color_on_stroke)
return;var now=new Date().getTime();var lines=0;for(var s in S.stations)
{if(!s||typeof live.detectors.stations[s]=='undefined')
continue;var D=live.detectors.stations[s];if(!live.map.getBounds().contains(S.pos)&&!live.map.getBounds().contains(D.pos))
continue;var status=S.stations[s];var calc=(status&4);if(live.detectors.lines_enabled&&!(live.detectors.config.lines_show_used&&calc)&&!(live.detectors.config.lines_show_assigned&&!calc))
continue;D.last=t;if(live.detectors.enabled)
live.detectors.show_marker(D,calc?2:1);if(!live.detectors.lines_enabled)
continue;if(live.detectors.enabled)
D.lines_count++;var dist=live.distance(D.pos,S.pos)/1000;var r,g,b;if(live.detectors.config.lines_color_type==2)
{r=Math.round(255*(dist-500)/3000+50);g=Math.round(255*(1-(dist+50)/300)+100);b=Math.round(255*(dist<200?(0.9*(dist/200)):(1-dist/2000))+50);r=r<0?0:(r>255?255:r);g=g<0?0:(g>255?255:g);b=b<0?0:(b>255?255:b);}
else
{d=dist-150;if(d<0)d=0;if(d>1200)d=1200;r=Math.round(255*(d/1200*0.2)+50);g=Math.round(255*(1-d/1200*0.5));b=Math.round(255*(d/1200*0.9));}
var opts={color:"rgb("+r+","+g+","+b+")",opacity:live.config.no_transparency?1:0.6,weight:calc?1.5:0.4,geodesic:live.detectors.config.lines_geodesic,steps:Math.ceil(dist/30),interactive:false,wrap:false,pane:'sta_lines'};var pos=live.detectors.lines_pos;var P;if(typeof(live.detectors.lines[pos])=='undefined'||!live.detectors.lines[pos])
{P=live.detectors.lines[pos]=L.geodesic([[L.latLng(D.pos),L.latLng(S.pos)]],opts).addTo(live.map);}
else
{P=live.detectors.lines[pos];live.detectors.lines_hide_station(P);P.setStyle(opts);P.setLatLngs([[L.latLng(D.pos),L.latLng(S.pos)]]);}
P.glowing=false;P.time_start=now;P.time_changed=now;P.strike=S;P.detector=D;P.detector_accounted=true;live.detectors.lines_pos=(live.detectors.lines_pos+1)%live.detectors.config.lines_max_num;lines++;if(lines>=live.detectors.config.lines_max_per_strike)
break;}}
live.detectors.lines_hide_station=function(P)
{if(P.detector_accounted)
{P.detector_accounted=false;if(P.detector.lines_count>0)
P.detector.lines_count--;}}
live.detectors.stroke_deleted=function(S)
{}
live.sound={};live.sound.files=[];live.sound.num_play=0;live.sound.play_last=0;live.sound.addControl=function(){{live.sound.enabled=!is_mobile()?(live.config.get('s')&1):0;live.sound.volume=live.config.get('s')>>1;L.Control.Sound=L.Control.extend({onAdd:function(map){live.sound.control=document.createElement('div');live.sound.control.className='live_ctrl';live.sound.control.id='ctrl_snd';live.sound.control.index=6;L.DomEvent.disableClickPropagation(live.sound.control);$(live.sound.control).hover(function(){if(!$(".ctrl_detail").length)
{$(".ctrl_detail").remove();live.sound.description($(this));}},function(){$(".ctrl_detail").remove();}).append(live.sound.button());return live.sound.control;},onRemove:function(map){}});live.control.sound=function(opts){return new L.Control.Sound(opts);}
live.control.sound({position:'topright'}).addTo(live.map);}}
live.sound.button=function(){live.sound.image=$('<img id="live_sound_img" src="/Images/speaker_black.png">');live.sound.image.append('<img src="/Images/speaker_blue.png" style="display:none"><img src="/Images/speaker_black.png" style="display:none">');live.sound.image.on('click',function()
{live.sound.enabled=!live.sound.enabled;live.sound.set(true);live.sound.description_update();return false;});live.sound.set();return live.sound.image;}
live.sound.description_update=function()
{if(is_mobile()&&!live.sound.enabled)
live.sound.volume=0;if(!live.sound.volume&&live.sound.enabled)
live.sound.volume=100;$("input[name='snd_volume'][value="+live.sound.volume+"]").prop("checked",true);}
live.sound.description=function(elem)
{elem.append($("<div class='ctrl_detail'>"+lm_lang.lm_live_snd_info+"</div>").append("<form class='live_set' id='live_set_snd'></form>"));if(is_mobile())
{$("#live_set_snd").append("<span class='live_set_descr'>"+lm_lang.lm_live_snd_sounds+":</span>"
+" <span class='live_set_group' id='snd_volume_radios'><label for='snd_volume_min'>"+lm_lang.lm_live_snd_off+" </label>"
+"<input type='radio' value='0'   name='snd_volume' id='snd_volume_min'>"
+"<input type='radio' value='100' name='snd_volume' id='snd_volume_max'>"
+"<label for='snd_volume_max'> "+lm_lang.lm_live_snd_on+"</label></span>");}
else
{$("#live_set_snd").append("<span class='live_set_descr'>"+lm_lang.lm_live_snd_volume+":</span>"
+" <span class='live_set_group' id='snd_volume_radios'><label for='snd_volume_min'>"+lm_lang.lm_live_snd_min+" </label>"
+"<input type='radio' value='7'  name='snd_volume' id='snd_volume_min'>"
+"<input type='radio' value='25'  name='snd_volume'>"
+"<input type='radio' value='60'  name='snd_volume'>"
+"<input type='radio' value='100' name='snd_volume' id='snd_volume_max'>"
+"<label for='snd_volume_max'> "+lm_lang.lm_live_snd_max+"</label></span>");}
if(!$("input[name='snd_volume']:checked").val())
$("input[name='snd_volume'][value=100]").prop("checked",true);$("#live_set_snd input").on('click',function(e){var val=$("input[name='snd_volume']:checked").val();live.sound.enabled=val!=0;live.sound.volume=val;live.sound.set(true);});live.sound.description_update();}
live.sound.set=function(play)
{if(live.sound.enabled)
{if(typeof live.sound.files[0]=='undefined')
{if(is_mobile())
{live.sound.files[0]=new Audio();document.body.appendChild(live.sound.files[0]);live.sound.files[0].src=live.config.sound_dir+'/t2.wav';if(play&&live.sound.enabled)
live.sound.files[0].play();}
else
{setTimeout(function(){live.sound.add_file('t',5,0);live.sound.add_file('tl100',5,-100);live.sound.add_file('tl50',5,-50);live.sound.add_file('tr50',5,50);live.sound.add_file('tr100',5,100);if(play&&live.sound.enabled)
live.sound.play();},100);}}
else if(is_mobile())
{if(play&&live.sound.enabled)
live.sound.play();}}
live.sound.image.attr('src','/Images/speaker_'+(live.sound.enabled?'blue':'black')+'.png');live.config.set('s',(live.sound.enabled?1:0)+(live.sound.volume<<1));}
live.sound.add_file=function(filename,cnt,horiz_pos)
{var snd=new Audio()
var canPlayType=snd.canPlayType("audio/wav");var ext;if(canPlayType.match(/maybe|probably/i))
ext='.wav';else
ext='.mp3';snd.src=live.config.sound_dir+'/'+filename+ext;snd.horiz_pos=horiz_pos;snd.muted=false;var pos=live.sound.files.push(snd)-1;snd.addEventListener("loadeddata",function()
{for(var i=0;i<cnt-1;i++)
{setTimeout('var snd = new Audio(live.sound.files['+pos+'].src);'
+'document.body.appendChild(snd);'
+'snd.horiz_pos = '+horiz_pos+';'
+'live.sound.files.push(snd);',500*i);}});}
live.sound.play=function(S)
{if(!live.sound.enabled||(typeof live.sound.files[0].play=='undefined'))
return;var horiz_pos=0;var i=((live.sound.num_play++)%live.sound.files.length);var snd=live.sound.files[i];if(live.sound.files.length>1)
{var tries=live.sound.files.length-1;var j=i;if(typeof S!='undefined')
{var e=live.map.getBounds().getNorthEast().lng;var w=live.map.getBounds().getSouthWest().lng;if(e>w)
{horiz_pos=(S.pos[1]-w)/(e-w);}
else if(S.pos[1]>w)
{horiz_pos=(S.pos[1]-w)/(e+360-w);}
else
{horiz_pos=(S.pos[1]-w+360)/(e+360-w);}
horiz_pos*=100*2;horiz_pos-=100;}
while(Math.round(snd.horiz_pos/50)!=Math.round(horiz_pos/50)&&--tries)
{j++;i=j%live.sound.files.length;snd=live.sound.files[i];}}
if(!live.sound.volume)
live.sound.volume=100;snd.volume=live.sound.volume/100;var timeout=1;var now=new Date().getTime();if(now-live.sound.play_last<200)
timeout=Math.round(Math.random()*200);live.sound.play_last=now;setTimeout(function(){try{live.sound.files[i].play();}catch(e){console.log(e);}},timeout);}
live.borders={};live.borders.enabled=false;live.borders.overlay=false;live.borders.show=function(show)
{if(live.borders.overlay===false)
{live.borders.overlay=true;$.getJSON('/geo.json',function(data){live.borders.overlay=L.geoJson(data,{clickable:false,interactive:false,maxZoom:8,style:{stroke:true,color:'#0a0',weight:0.5,opacity:0.8,fill:false,}});if(live.borders.enabled)
live.borders.overlay.addTo(live.map);});}
try{if(show&&!live.borders.overlay.getPane())
live.borders.overlay.addTo(live.map);else if(!show&&live.borders.overlay.getPane())
live.borders.overlay.removeFrom(live.map);}catch(e){}
live.borders.enabled=show;}
live.tiles={};live.tiles.overlays={};live.tiles.timeout=null;live.tiles.hidden=false;live.tiles.t_last=0;live.tiles.init=function()
{live.tiles.overlays.strokes=L.tileLayer.lmo("https://tiles.lightningmaps.org/?x={x}&y={y}&z={z}&s=256&t=5",{minZoom:2,maxZoom:16,minNativeZoom:3,maxNativeZoom:16,zIndex:910,className:'tiles_strokes',crossOrigin:false,refresh_sec:live.config.tile_strokes_interval,config_name:'ts',config_inverse:true,onadd:function(){live.tiles.overlays.strokes_counter.check();},onremove:function(){live.tiles.overlays.strokes_counter.check();}});live.tiles.overlays.strokes24=L.tileLayer.lmo("https://tiles.lightningmaps.org/?x={x}&y={y}&z={z}&s=256&t=6",{minZoom:2,maxZoom:16,minNativeZoom:3,maxNativeZoom:16,zIndex:909,className:'tiles_strokes24',crossOrigin:false,refresh_sec:live.config.tile_strokes_interval,config_name:'ts24',config_inverse:false,onadd:function(){live.tiles.overlays.strokes_counter.check();},onremove:function(){live.tiles.overlays.strokes_counter.check();}});live.tiles.overlays.strokes_counter=L.tileLayer.lmo("https://tiles.lightningmaps.org/?x={x}&y={y}&z={z}&s=256&count={C}",{minZoom:2,maxZoom:16,minNativeZoom:3,maxNativeZoom:16,zIndex:920,className:'tiles_strokes_counter',crossOrigin:false,refresh_sec:live.config.tile_strokes_interval,config_name:'tsc',config_inverse:false,hidden_when:function(){return!live.tiles.overlays.strokes.visible();},url_replace:{'{C}':function(){var str="5";str+=live.tiles.overlays.strokes24.visible()?",6":"";return str;}}});live.tiles.overlays.radar=L.tileLayer.lmo("https://"+live.map_host+"/radar/{z}/{x}/{y}.png?",{minZoom:2,maxZoom:16,minNativeZoom:3,maxNativeZoom:16,zIndex:902,className:'tiles_radar',opacity:0.6,crossOrigin:false,bounds:L.latLngBounds([90,-180],[0,-20]),refresh_sec:live.config.tile_radar_interval,attribution:'&copy; <a href="https://mesonet.agron.iastate.edu/GIS/radview.phtml" target="_blank">IEM Nexrad</a>',config_name:'tr',config_inverse:false});live.tiles.overlays.clouds=L.tileLayer.lmo("https://"+live.map_host+"/noaa_sat/",{wms:true,layers:'1',version:'1.3.0',format:'image/png',transparent:false,opacity:0.8,maxNativeZoom:5,maxZoom:8,refresh_sec:900,attribution:'&copy; <a href="https://nowcoast.noaa.gov/help" target="_blank">NOAA</a>',zIndex:901,config_name:'tc'});live.tiles.overlays.clouds.on('add',function(){live.borders.show(true);});live.tiles.overlays.clouds.on('remove',function(){live.borders.show(false);});live.tiles.check();}
live.tiles.check=function()
{if(!live.is_visible()||live.tiles.hidden||t-live.tiles.t_last<30||live.data.loops<30)
{setTimeout(live.tiles.check,500);return;}
for(var i in live.tiles.overlays)
{live.tiles.overlays[i].refresh();}
live.tiles.t_last=t;setTimeout(live.tiles.check,1000);}
live.tiles.hide=function()
{for(i in live.tiles.overlays)
live.tiles.overlays[i].setOpacity(0);live.tiles.hidden=true;}
live.tiles.unhide=function()
{if(live.tiles.hidden)
{live.tiles.hidden=false;for(i in live.tiles.overlays)
{var op=1;if(typeof live.tiles.overlays[i].options.opacity_last!="undefined")
op=live.tiles.overlays[i].options.opacity_last;live.tiles.overlays[i].setOpacity(op);live.tiles.overlays[i].refresh();}}}
live.tilelayer_extend={options:{refresh_sec:0,refresh_timer:false,refresh_time_last:0,opacity_last:1,config_name:false,config_inverse:false,wms:false},refresh:function(force)
{if(!force)
{if(t<30)
return false;var round=Math.ceil(1/live.map.getZoom()*live.config.tile_update_timefactor-live.config.tile_update_sub);var upd=this.options.refresh_sec/round;if(!upd)
return false;if(upd<live.config.tile_update_min_sec)
upd=live.config.tile_update_min_sec;upd=Math.floor(t/upd)*upd;if(upd==this.refresh_time)
return false;}
this.refresh_time=upd;if(0)
{this.setUrl(this._url);}
else
{for(var key in this._tiles)
{var tile=this._tiles[key].el;var coords=this._tiles[key].coords;tile.style.backgroundImage='url('+tile.src+')';tile.src=this.getTileUrl(coords);tile.LMOlayer=this;tile.LMOlayer.fire('tileloadstart',{"tile":tile});tile.onload=function(){tile.LMOlayer.fire('tileload',{"tile":tile});};tile.onerror=function(){tile.LMOlayer.fire('tileerror',{"tile":tile});};}}},check:function()
{this.removeFrom(live.map);this.show(live.config.get(this.options.config_name));},show:function(show)
{if(typeof this.options.hidden_when=="function")
{var hidden=this.options.hidden_when();if(hidden)
{if(this.visible())
this.removeFrom(live.map);return null;}}
if(show&&!this.visible())
{live.config.set(this.options.config_name,this.options.config_inverse?0:1);return this.addTo(live.map);}
else if(!show&&this.visible())
{live.config.set(this.options.config_name,this.options.config_inverse?1:0);return this.removeFrom(live.map);}
return null;},visible:function()
{if(!this.getContainer())
return false;return true;},start:function()
{if((!this.options.config_inverse&&live.config.get(this.options.config_name)==1)||(this.options.config_inverse&&live.config.get(this.options.config_name)!=1))
{var layer=this;setTimeout(function(){layer.show(true);},200);}}};L.tileLayer.LMO_WMS=L.TileLayer.WMS.extend(live.tilelayer_extend);live.tilelayer_extend.getTileUrl=function(coords)
{var url=this._url.replace('{x}',coords.x).replace('{y}',coords.y).replace('{z}',coords.z);var time=t;if(typeof this.options.url_replace=="object")
{for(pattern in this.options.url_replace)
{url=url.replace(pattern,this.options.url_replace[pattern]());}}
if(time<1000000)
time=(new Date().getTime())/1000;if(this.options.refresh_sec&&time)
{url+="&T="+Math.floor(time/this.options.refresh_sec);}
return url;}
L.tileLayer.LMO=L.TileLayer.extend(live.tilelayer_extend);L.tileLayer.lmo=function(url,options)
{options.opacity_last=options.opacity;var tileLayer;if("wms"in options&&options.wms==true)
tileLayer=new L.tileLayer.LMO_WMS(url,options);else
tileLayer=new L.tileLayer.LMO(url,options);tileLayer.on('tileloadstart',function(e){var tile=e.tile;});tileLayer.on('tileload',function(e){var tile=e.tile;tile.errors=0;setTimeout(function(){tile.style.backgroundImage='';},1500);});tileLayer.on('tileerror',function(e){var tile=e.tile;if(!("errors"in tile))
tile.errors=1;else
tile.errors++;if("timeout_try_2nd"in tile)
{clearTimeout(tile.timeout_try_2nd);return;}
if(tile.errors<3)
{tile.timeout_try_2nd=setTimeout(function(){if(tile.src.substr(-1,1)!="#")
tile.src+="#";},2000+Math.random()*5000);}});tileLayer.on('tileunload',function(e){var tile=e.tile;if("timeout_try_2nd"in tile)
clearTimeout(tile.timeout_try_2nd);});tileLayer.on('add',function(e){var layer=e.target;if(typeof layer.options.onadd=="function")
layer.options.onadd();});tileLayer.on('remove',function(e){var layer=e.target;if(typeof layer.options.onadd=="function")
layer.options.onremove();});tileLayer.start();return tileLayer;}
live.daynight={};live.daynight.enabled=false;live.daynight.overlay=null;live.daynight.init=function()
{if(typeof L.terminator=='undefined')
{setTimeout(live.daynight.init,1000);return;}
live.daynight.overlay=L.terminator();live.daynight.overlay.setStyle({color:'#000',opacity:0,fillColor:'#000',fillOpacity:0.2});live.daynight.enabled=live.config.get('dn')==1;live.daynight.check();}
live.daynight.check=function()
{if(live.is_visible())
live.daynight.refresh();setTimeout(live.daynight.check,1000);}
live.daynight.refresh=function()
{if(live.daynight.enabled)
{live.daynight.overlay.addTo(live.map);var t2=L.terminator();live.daynight.overlay.setLatLngs(t2.getLatLngs());live.daynight.overlay.redraw();}
else
{live.daynight.overlay.removeFrom(live.map);}}
live.daynight.toggle=function(on)
{live.daynight.enabled=on?true:false;live.daynight.refresh();live.config.set('dn',live.daynight.enabled?1:0);}
live.darkness={};live.darkness.level=100;live.darkness.overlay=null;live.darkness.init=function()
{live.darkness.overlay=L.polygon([[-90,-360],[90,-360],[90,360],[-90,360]],{fillColor:"#000",fillOpacity:0,opacity:0,interactive:false}).addTo(live.map);live.darkness.level=live.config.get("b");live.darkness.set(live.darkness.level);}
live.darkness.set=function(pct)
{live.darkness.overlay.setStyle({fillOpacity:pct/100});live.darkness.level=pct;live.config.set("b",live.darkness.level);}
live.coordinates={};live.coordinates.visible=false;live.coordinates.addControl=function()
{if(live.config.get('test')!=1)
return;live.coordinates.ctrl=document.createElement('div');live.coordinates.ctrl.innerHTML='';live.coordinates.ctrl.className='live_ctrl live_ctrl_left';live.coordinates.ctrl.id='ctrl_coordinates';live.coordinates.ctrl.style.display='none';live.coordinates.ctrl.index=2;L.DomEvent.disableClickPropagation(live.settings.control);}
live.coordinates.init=function()
{if(live.config.get('test')!=1)
return;}
live.clock={};live.clock.status=0;live.clock.timer=null;live.clock.addControl=function()
{live.clock.control=live.menu.button("clock",{position:is_mobile()==1?'bottomright':'topleft',html:'<img id="live_cal_img" src="/Images/cal.png"> <span id="live_clock"></span><span id="live_clock_normal"></span><span id="live_clock_bad"></span>',content:function(container)
{live.menu.add_option('strokes_show',container,{type:'radio',data:{last:{value:0},all:{value:1},"24h":{value:3}},value:function(){return(live.tiles.overlays.strokes.visible()?1:0)
+(live.tiles.overlays.strokes24.visible()?2:0)
+(live.archive.is_enabled()?99:0);},action:function(value){live.archive.stop();value=parseInt(value);live.tiles.overlays.strokes.show(value&1);live.tiles.overlays.strokes24.show(value&2);}});live.menu.add_option('strokes_24h',container,{type:'text',data:{date:{type:'date',opts:{startDate:"2013-01-01",endDate:new Date()}},hour:{type:'select',opts:{0:"00h UTC",6:"06h UTC",12:"12h UTC",18:"18h UTC"}},ok:{type:'button'}},value:function(name){switch(name)
{case'date':return live.archive.get_date();case'hour':return live.archive.get_hour();}
return false;},action:function(value,name,applied){},apply:function(values){live.archive.start({date:values.date,hour:values.hour,period:24*60});}});}});if(is_mobile()==1)
{$(live.clock.control).css({"position":"absolute","right":"48px","bottom":"16px"});}}
live.clock.init=function()
{}
live.clock.set_time=function(time)
{if(!live.archive.is_enabled())
$("#live_clock").html(new Date(time).toLocaleTimeString());}
live.clock.set_text_normal=function(txt,nohide)
{$("#live_clock_normal").html(txt);if(live.clock.status>1&&nohide!=true)
return;live.clock.status=1;$("#live_clock").css({"display":"none"});$("#live_clock_normal").css({"display":""});clearTimeout(live.clock.timer);if(!nohide)
{live.clock.timer=setTimeout(function(){if(live.clock.status==1)
{$("#live_clock").css({"display":""});$("#live_clock_normal").css({"display":"none"});}},2000);}}
live.clock.set_text_bad=function(txt)
{live.clock.status=2;$("#live_clock").css({"display":"none"});$("#live_clock_normal").css({"display":"none"});$("#live_clock_bad").css({"display":""}).html(txt);clearTimeout(live.clock.timer);live.clock.timer=setTimeout(function(){$("#live_clock").css({"display":""});$("#live_clock_bad").css({"display":"none"});live.clock.status=0;},2000);}
live.archive={}
live.archive.enabled=false;live.archive.tiles={};live.archive.time_from=new Date();live.archive.time_to=new Date();live.archive.init=function()
{var now=new Date().getTime();var yesterday=new Date(now-3600*24*1000);live.archive.time_from.setFullYear(yesterday.getFullYear(),yesterday.getMonth(),yesterday.getDate());live.archive.time_from.setUTCHours(0);if(live.config.get("ar")&&live.config.get("as"))
{}}
live.archive.is_enabled=function()
{return live.archive.enabled;}
live.archive.start=function(opts)
{if(opts.hour<10)
opts.hour="0"+opts.hour;live.archive.time_from=new Date(opts.date+"T"+opts.hour+":00:00Z");live.archive.time_to=new Date(Math.floor(live.archive.time_from.getTime()/1000+opts.period*60)*1000);if(typeof live.archive.tiles.strokes=="object")
live.archive.tiles.strokes.removeFrom(live.map);var url="https://tiles.lightningmaps.org/?x={x}&y={y}&z={z}&s=256";url+="&from="+live.archive.time_from.toISOString();url+="&to="+live.archive.time_to.toISOString();live.archive.tiles.strokes=L.tileLayer.lmo(url,{minZoom:2,maxZoom:16,minNativeZoom:3,maxNativeZoom:16,zIndex:910,}).addTo(live.map);var f=live.archive.time_from;var t=live.archive.time_to;live.clock.set_text_normal(f.toISOString().substr(0,10)+" "+f.toISOString().substr(11,2)+":00 - "+
t.toISOString().substr(0,10)+" "+t.toISOString().substr(11,2)+":00 UTC",true);live.config.set("ar",true);live.config.set("as",f.toISOString().substr(2,11));live.archive.enabled=true;live.tiles.hide();live.marker.hide_all();setTimeout(live.marker.hide_all,2000);setTimeout(live.marker.hide_all,4000);}
live.archive.stop=function(opts)
{live.config.set("ar",false);if(!live.archive.enabled)
return;live.archive.enabled=false;live.tiles.unhide();if(typeof live.archive.tiles.strokes=="object")
live.archive.tiles.strokes.removeFrom(live.map);live.clock.set_text_normal("Starting...");}
live.archive.get_date=function()
{return live.archive.time_from.toISOString().substr(0,10);}
live.archive.get_hour=function()
{return live.archive.time_from.getUTCHours();}
live.stroke_info={};live.stroke_info.addControl=function()
{L.Control.StrokeInfo=L.Control.extend({onAdd:function(map){live.stroke_info.control=document.createElement('div');live.stroke_info.control.innerHTML='<img src="/Images/info.png" alt="Information / Legend">';live.stroke_info.control.className='live_ctrl live_ctrl_left';live.stroke_info.control.id='ctrl_inf';live.stroke_info.control.index=6;L.DomEvent.disableClickPropagation(live.stroke_info.control);$(live.stroke_info.control).hover(function(){$(".ctrl_detail").remove();$(this).append($("<div class='ctrl_detail'>"
+lm_lang.lm_live_info.replace('[Blitzortung]','<a href="https://www.blitzortung.org/" target="_blank">Blitzortung.org</a>')
+"<div id='ctrl_legend'>"
+"<div id='leg_title'>"+lm_lang.lm_live_info_legend_title+":</div>"
+"<ul>"
+"<li id='leg1'>"+lm_lang.lm_live_info_legend1.replace('[sec]','<strong>'+live.config.marker_stroke_seconds+'</strong>')+"</li>"
+"<li id='leg2'>"+lm_lang.lm_live_info_legend2.replace('[minutes]','<strong>'+60+'</strong>').replace('[minutes]',60)+"</li>"
+"<li id='leg3'>"+lm_lang.lm_live_info_legend3+"</li>"
+"</ul>"
+"</div>"
+"<div id='ctrl_usage'>"+lm_lang.lm_live_usage+"</div>"
+"<div id='ctrl_terms'><a href='/about'>"+lm_lang.lm_live_terms+"</a> <div id='wb_hide_x'><a href='javascript:void(0)' onclick='hide_ads();'>"+lm_lang.lm_live_hideads+"</a></div></div>"
+"</div>"));},function(){$(this).find(".ctrl_detail").remove();});return live.stroke_info.control;},onRemove:function(map){}});live.control.stroke_info=function(opts){return new L.Control.StrokeInfo(opts);}
live.control.stroke_info({position:'topleft'}).addTo(live.map);}
live.stroke_settings={};live.stroke_settings.addControl=function()
{live.stroke_settings.control=live.menu.button("strokes",{position:"topleft",html:'<span class="ctrl_name"><img src="/Images/blitz.png" alt="'+_T('strokes')+'"></span>&nbsp;&nbsp;<span id="str_rate">?</span>  |  <span class="ctrl_name">'+_T('delay')+': </span><span id="delay">?</span>',content:function(container)
{live.menu.add_option('strokes_counter',container,{type:'radio',data:{on:{value:1},off:{value:0}},value:function(){return live.tiles.overlays.strokes_counter.visible()?1:0;},action:function(value){live.tiles.overlays.strokes_counter.show(value=='1');}});live.menu.add_option('strokes_exp',container,{descr:'Live Data',text:'Lightningmaps.org (yellow) uses some more experimental data, but is currently the default setting. Blitzortung.org data is blue. Note that older lightning strokes are always yellow and are from Blitzortung.org.',type:'check',value_type:'bitmask',data:{"lmo":{value:4,text:"Lightningmaps"},"bo":{value:2,text:"Blitzortung"},"test":{value:8,text:"Testing"},},value:function(){return live.data.src_mask;},action:function(value){value=parseInt(value);if(value!=live.data.src_mask)
live.stroke_settings.update(value);}});container.append("<span style='color:#999; font-size:70%' id='stroke_status_info'></span>");}});live.config.onupdate("src",live.stroke_settings.update);live.data.src_mask=live.config.get('src')*1;if(!(live.data.src_mask&(2|4)))
live.data.src_mask=live.config.src_mask_default;}
live.stroke_settings.update=function(value){live.data.src_mask=value;live.data.update('src');live.config.set("src",value);live.data.size_last=0;setTimeout(function(){live.marker.check_strokes(true)},1000);}
live.position={};live.position.marker=null;live.position.circle=null;live.position.watchid=null;live.position.enabled=false;live.position.refresh=false;live.position.follow=false;live.position.clicked=false;live.position.init=function()
{if(navigator.geolocation&&live.config.get('o'))
live.position.set(live.config.position_in_url?false:true);}
live.position.addControl=function(){if(!navigator.geolocation)
return;try
{live.position.enabled=(live.config.get('o')&1)?true:false;live.position.follow=(live.config.get('o')&2)?true:false;L.Control.PositionSettings=L.Control.extend({onAdd:function(map){live.position.control=document.createElement('div');live.position.control.className='live_ctrl';live.position.control.id='ctrl_pos';live.position.control.index=6;L.DomEvent.disableClickPropagation(live.position.control);$(live.position.control).hover(function(){if(!$(".ctrl_detail").length)
{$(".ctrl_detail").remove();live.position.description($(this));}},function(){$(".ctrl_detail").remove();}).append(live.position.button());return live.position.control;},onRemove:function(map){}});live.control.position_settings=function(opts){return new L.Control.PositionSettings(opts);}
live.control.position_settings({position:'topright'}).addTo(live.map);}
catch(e){}}
live.position.description=function(elem)
{var x=Math.round(live.config.get('x')*1E2)/1E2;var y=Math.round(live.config.get('y')*1E2)/1E2;var z=live.config.get('z');elem.append($("<div class='ctrl_detail'>"
+"<form class='live_set' id='live_set_pos'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_pos_show+":</span>"
+" <span class='live_set_group' id='set_pos_show'> "
+" <label for='set_pos_show_off'>"+lm_lang.lm_live_set_pos_show_off+" </label>"
+" <input type='radio' value='0' name='set_pos_shw' id='set_pos_show_off' checked>"
+" <input type='radio' value='1' name='set_pos_shw' id='set_pos_show_on'>"
+" <label for='set_pos_show_on'> "+lm_lang.lm_live_set_pos_show_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_pos_info+"</div>"
+"</form> "
+"<form class='live_set' id='live_set_pos_follow'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_pos_follow+":</span>"
+" <span class='live_set_group' id='set_pos_follow'> "
+" <label for='set_pos_follow_off'>"+lm_lang.lm_live_set_pos_follow_off+" </label>"
+" <input type='radio' value='0' name='set_pos_flw' id='set_pos_follow_off' checked>"
+" <input type='radio' value='1' name='set_pos_flw' id='set_pos_follow_on'>"
+" <label for='set_pos_follow_on'> "+lm_lang.lm_live_set_pos_follow_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_follow_info+"</div>"
+"</form> "
+"<span class='live_set_descr'>"+lm_lang.lm_live_shortlink_descr+":</span>"
+"<span class='live_set_group' id='live_shortlink'> "
+" <input type='text' class='live_set_text' value='https://lmaps.org/#"+x+";"+y+";"+z+"' id='live_shortlink_url' onClick='this.select();'>"
+"</span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_shortlink_info+"</div>"
+"</div>").append("<form class='live_set' id='live_set_pos'></form>"));$("#live_set_pos input, #live_set_pos_follow input").on('click touchstart',function(e){live.position.enabled=$("input[name='set_pos_shw']:checked").val()==1;live.position.clicked=true;live.position.set($("input[name='set_pos_flw']:checked").val()==1);});live.position.set_config();}
live.position.button=function(){live.position.image=$('<img id="live_sound_img" src="/Images/position_black.png">');live.position.image.append('<img src="/Images/position_blue.png" style="display:none"><img src="/Images/position_black.png" style="display:none">');live.position.image.on('click',function()
{setTimeout(function(){live.position.enabled=!live.position.enabled;live.position.set(true);live.position.clicked=true;},1);return false;});live.position.set(false);return live.position.image;}
live.position.set_config=function()
{live.position.follow=live.position.enabled&&live.position.follow;live.position.image.attr('src','/Images/position_'+(live.position.enabled?'blue':'black')+'.png');live.config.set('o',(live.position.enabled?1:0)+(live.position.follow?2:0));$("input[name='set_pos_shw'][value="+(live.position.enabled?1:0)+"]").prop("checked",true);$("input[name='set_pos_flw'][value="+(live.position.follow?1:0)+"]").prop("checked",true);}
live.position.set=function(do_follow)
{live.position.refresh=do_follow||is_mobile();live.position.follow=do_follow;if(live.position.enabled)
{navigator.geolocation.getCurrentPosition(live.position.set_map,live.position.err);}
if(live.position.enabled&&live.position.refresh)
{if(live.position.watchid==null)
live.position.watchid=navigator.geolocation.watchPosition(live.position.set_map,live.position.err);}
if(!live.position.enabled)
{live.position.refresh=false;live.position.off();}
live.position.set_config();live.position.clicked=false;}
live.position.err=function(err){if(err.code==2)
return;live.position.off();live.position.err_shown=true;}
live.position.off=function(){live.position.enabled=false;live.marker.set_invisible(live.position.marker);live.marker.set_invisible(live.position.circle);live.position.marker=null;live.position.circle=null;if(live.position.watchid!=null&&!live.position.refresh)
{navigator.geolocation.clearWatch(live.position.watchid);live.position.watchid=null;}
live.position.set_config();}
live.position.set_map=function(position){if(!live.position.enabled)
return;var pos=[position.coords.latitude,position.coords.longitude];if(live.position.follow)
live.map.flyTo(pos);if(live.position.clicked)
{live.position.clicked=false;if(live.map.getZoom()<8)
live.map.flyTo(pos,8);}
var style={fillColor:'#4444ff',fillOpacity:0.8,color:'#fff',opacity:0.9,weight:2,pane:'position'};if(live.position.marker!=null)
{live.position.marker.setLatLng(pos);live.position.marker.redraw();}
else
{live.position.marker=L.circleMarker(pos,{interactive:false,radius:7,}).addTo(live.map);}
live.position.marker.setStyle(style);style={interactive:false,strokeColor:'#fff',strokeOpacity:0.3,strokeWeight:2,fillColor:'#0000ff',fillOpacity:0.1,};if(live.position.circle!=null)
{live.position.circle.setLatLng(pos);}
else
{live.position.circle=L.circle(pos,{radius:position.coords.accuracy,});}
live.position.circle.setStyle(pos);}
live.settings={};live.settings.addControl=function(){L.Control.GeneralSettings=L.Control.extend({onAdd:function(map){live.settings.control=document.createElement('div');live.settings.control.className='live_ctrl live_ctrl_right';live.settings.control.id='ctrl_settings';live.settings.control.index=1;L.DomEvent.disableClickPropagation(live.settings.control);$(live.settings.control).on('click mouseenter touchstart',function()
{if(!$(".ctrl_detail").length)
{$(".ctrl_detail").remove();live.settings.description($(this));}}).on('mouseleave',function(){$(".ctrl_detail").remove();}).append(live.settings.button());return live.settings.control;},onRemove:function(map){}});live.control.general_settings=function(opts){return new L.Control.GeneralSettings(opts);}
live.control.general_settings({position:'topright'}).addTo(live.map);}
live.settings.button=function(){live.settings.image=$('<img id="live_settings_img" src="/Images/gear.png">');live.settings.image.on('click',function()
{return false;});return live.settings.image;}
live.settings.description_update=function()
{$(".live_set_group a").removeClass("active");$("a#set_map_"+live.map_style_get()).addClass("active");if(live.map_style_roads_get())
$("a#set_map_roads").addClass("active");}
live.settings.description=function(elem)
{live.settings.elements=$("<div class='ctrl_detail'></div>");elem.append(live.settings.elements);live.settings.elements.append("<form class='live_set' id='live_set_map_style'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_map_style+":</span>"
+" <span class='live_set_group' id='set_map_st'> "
+" <a href='javascript:void()' class='live_set live_set_map' id='set_map_os' value='os'>"+lm_lang.lm_live_set_map_style_osm+"</a>"
+" <a href='javascript:void()' class='live_set live_set_map' id='set_map_st' value='st'>"+lm_lang.lm_live_set_map_style_terrain+"</a>"
+" <a href='javascript:void()' class='live_set live_set_map' id='set_map_se' value='se'>"+lm_lang.lm_live_set_map_style_sat+"</a>"
+(live.config.get('gme')?(" | <a href='javascript:void()' class='live_set live_set_map' id='set_map_fr' value='fr'>"+lm_lang.lm_live_set_map_style_normal+"</a>"
+" <a href='javascript:void()' class='live_set live_set_map' id='set_map_ft' value='gt'>G-"+lm_lang.lm_live_set_map_style_terrain+"</a>"
+" <a href='javascript:void()' class='live_set live_set_map' id='set_map_fx' value='gx'>G-"+lm_lang.lm_live_set_map_style_sat+"</a>"):"")
+" | <a href='javascript:void()' class='live_set live_set_map_roads' id='set_map_roads'      value='roads'>"+lm_lang.lm_live_set_map_style_roads+"</a>"
+" </span>"
+"<div class='live_set_info'>Due to high costs we had to remove Google Maps. New satellite maps are BETA! We are working on it. "
+"<div style='font-size:0.8em'>"
+"Satellite map: <a href='https://maps.eox.at/#data' target='_blank'>Sentinel-2 cloudless</a> from <a href='https://s2maps.eu' target='_blank'>s2maps.eu</a> by <a href='https://eox.at' target='_blank'>EOX IT Services GmbH</a> (Contains modified Copernicus Sentinel data 2022)"
+", Street map: &copy; <a href='https://www.openstreetmap.org/'>OpenStreetMap</a> contributors <a href='https://creativecommons.org/licenses/by-sa/2.0/'>CC-BY-SA</a>"
+"</div>"
+"</div>"
+"</form>");$("a.live_set_map").on('click',function(e){live.map_style_set2($(this).attr("value"));live.settings.description_update();});$("a.live_set_map_roads").on('click',function(e){live.map_style_roads_toggle();live.settings.description_update();});live.settings.description_update();if(live.fullscreen.possible())
{live.settings.elements.append("<form class='live_set' id='live_set_fullscreen'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_fullscreen+":</span>"
+" <span class='live_set_group' id='set_fullscr'> "
+" <input type='radio' value='0' name='set_fullscren' id='set_fullscren_off' checked><label for='set_fullscren_off'> "+lm_lang.lm_live_set_fullscreen_off+"</label>"
+" <input type='radio' value='1' name='set_fullscren' id='set_fullscren_on'><label for='set_fullscren_on'> "+lm_lang.lm_live_set_fullscreen_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_fullscreen_info+"</div>"
+"</form>");$("#live_set_fullscreen input").on('click touchstart',function(e){live.fullscreen.toggle($("input[name='set_fullscren']:checked").val());});$("input[name='set_fullscren'][value="+(live.fullscreen.is_enabled()?1:0)+"]").prop("checked",true);}
live.settings.elements.append("<form class='live_set' id='live_set_thunder'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_thunder+":</span>"
+" <span class='live_set_group' id='set_thdr'> "
+" <label for='set_thunder_off'> "+lm_lang.lm_live_set_thunder_off+"</label>"
+" <input type='radio' value='0' name='set_thunder' id='set_thunder_off'>"
+" <input type='radio' value='1' name='set_thunder' id='set_thunder_1'>"
+" <input type='radio' value='2' name='set_thunder' id='set_thunder_2'>"
+" <input type='radio' value='3' name='set_thunder' id='set_thunder_all' checked>"
+"<label for='set_thunder_all'> "+lm_lang.lm_live_set_thunder_max+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_thunder_info+"</div>"
+"</form>");$("#live_set_thunder input").on('dblclick click touchstart',function(e){live.thunder.set(parseInt($("input[name='set_thunder']:checked").val()));});$("input[name='set_thunder'][value="+(live.thunder.status())+"]").prop("checked",true);live.settings.elements.append("<form class='live_set' id='live_set_daynight'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_daynight+":</span>"
+" <span class='live_set_group' id='set_dnight'> "
+" <input type='radio' value='0' name='set_daynight' id='set_daynight_off' checked><label for='set_daynight_off'> "+lm_lang.lm_live_set_daynight_off+"</label>"
+" <input type='radio' value='1' name='set_daynight' id='set_daynight_on'><label for='set_daynight_on'> "+lm_lang.lm_live_set_daynight_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_daynight_info+"</div>"
+"</form>");$("#live_set_daynight input").on('click touchstart',function(e){live.daynight.toggle($("input[name='set_daynight']:checked").val()=='1');});$("input[name='set_daynight'][value="+(live.daynight.enabled?1:0)+"]").prop("checked",true);live.settings.elements.append("<form class='live_set' id='live_set_darkness'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_darkness+":</span>"
+" <span class='live_set_group' id='set_darkness'>"
+" <div id='set_darkness_slider' class='slider'></div>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_darkness_info+"</div>"
+"</form>");var slider=document.getElementById('set_darkness_slider');noUiSlider.create(slider,{start:[live.darkness.level>=0&&live.darkness.level<100?live.darkness.level:0],range:{'min':0,'max':80}});slider.noUiSlider.on('update',function(values){live.darkness.set(values[0]);});live.settings.elements.append("<form class='live_set' id='live_set_clouds'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_clouds+":</span>"
+" <span class='live_set_group' id='set_clds'> "
+" <input type='radio' value='0' name='set_clouds' id='set_clouds_off' checked><label for='set_clouds_off'> "+lm_lang.lm_live_set_clouds_off+"</label>"
+" <input type='radio' value='1' name='set_clouds' id='set_clouds_on'><label for='set_clouds_on'> "+lm_lang.lm_live_set_clouds_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_clouds_info+"</div>"
+"</form>");$("#live_set_clouds input").on('click touchstart',function(e){live.tiles.overlays.clouds.show($("input[name='set_clouds']:checked").val()=='1');});$("input[name='set_clouds'][value="+(live.tiles.overlays.clouds.visible()?1:0)+"]").prop("checked",true);live.settings.elements.append("<form class='live_set' id='live_set_radar'>"
+"<span class='live_set_descr'>"+lm_lang.lm_live_set_radar+":</span>"
+" <span class='live_set_group' id='set_clds'> "
+" <input type='radio' value='0' name='set_radar' id='set_radar_off' checked><label for='set_radar_off'> "+lm_lang.lm_live_set_radar_off+"</label>"
+" <input type='radio' value='1' name='set_radar' id='set_radar_on'><label for='set_radar_on'> "+lm_lang.lm_live_set_radar_on+"</label>"
+" </span>"
+"<div class='live_set_info'>"+lm_lang.lm_live_set_radar_info+"</div>"
+"</form>");$("#live_set_radar input").on('click touchstart',function(e){live.tiles.overlays.radar.show($("input[name='set_radar']:checked").val()=='1');});$("input[name='set_radar'][value="+(live.tiles.overlays.radar.visible()?1:0)+"]").prop("checked",true);}
live.message={};live.message.init=function()
{live.control.message=function(opts){return new L.Control.Message(opts);}
live.control.message({position:'topright'}).addTo(live.map);}
live.message.show=function(text,time,style)
{$(live.controls.message).html(text).fadeIn(200);setTimeout(function(){$(live.controls.message).fadeOut(400);},time);}
live.debug=function(x)
{if(live.config.debug||live.config.get('debug')==1)
console.log(x);}
live.distance=function(p1,p2)
{function rad(x)
{return x*Math.PI/180;}
var R=6378137;var dLat=rad(p2[0]-p1[0]);var dLong=rad(p2[1]-p1[1]);var a=Math.sin(dLat/2)*Math.sin(dLat/2)+
Math.cos(rad(p1[0]))*Math.cos(rad(p2[0]))*Math.sin(dLong/2)*Math.sin(dLong/2);var c=2*Math.atan2(Math.sqrt(a),Math.sqrt(1-a));var d=R*c;return d;}
live.is_map_in_region=function(r)
{try{if(live.map.getZoom()<4)
return true;var e,w,W=R[r][0],E=R[r][1];e=live.map.getBounds().getNorthEast().lng%360;w=live.map.getBounds().getSouthWest().lng%360;if(!((w<W&&W<e)||(w<E&&E<e))&&!(W<w&&e<E))
return false;}
catch(e)
{return true;}
return true;}
live.page_reload=function(txt,delay)
{if(live.config.page_reload_enabled!=true)
return false;live.track('Reload',txt,live.data.loops);if(delay)
{setTimeout('window.location.reload()',delay);}
else
{setTimeout('window.location.reload()',500);setTimeout('window.location.reload()',5000);}
live.clock.set_text_bad("Reloading...");live.is_running=false;return true;}
live.is_visible=function()
{if('hidden'in document)
{return!document.hidden;}
return true;}
live.url={};live.url.timer=null;live.url.noupdate=false;live.url.hash_timeout=null;live.url.hash_from_config=function()
{var hash="";for(var i in live.config.vars)
{if(!i||!(i in live.config.vars)||i=="undefined")
continue;if(live.config.vars[i]===false)
continue;if(live.config.vars[i]===true)
hash+=i+";";else
hash+=i+"="+live.config.vars[i]+";";}
return hash;}
live.url.update=function()
{if(window.navigator.standalone==true)
return;if(live.url.noupdate)
{live.url.noupdate=false;return;}
if(is_mobile())
{window.location.hash=""
return;}
if(live.url.hash_timeout)
clearTimeout(live.url.hash_timeout);window.onhashchange=null;window.location.hash=live.url.hash_from_config();live.url.hash_timeout=setTimeout(function(){window.onhashchange=function()
{live.url.read(true);for(name in live.config.update_callbacks)
{var val=live.url.read(name);if(val!=false)
live.config.update_callbacks[name](val,name);}};},200);}
live.url.read=function(name)
{if(window.navigator.standalone==true)
return false;if(name==true)
live.config.vars={};var conf=window.location.hash.substring(1).split(';');for(var i=0;i<conf.length;i++)
{var d=conf[i].split('=');var n,v;if(d.length==1)
{v=d[0].replace(/^\s+|\s+$/g,'');if(isNaN(parseFloat(v)))
{n=v;v=true;}
else
{switch(i)
{case 0:n='x';break;case 1:n='y';break;case 2:n='z';break;default:continue;}}}
else if(d.length<2)
{continue;}
else
{n=d[0].replace(/^\s+|\s+$/g,'');v=d[1].replace(/^\s+|\s+$/g,'');}
if(name==false)
{live.config.vars[n]=v;}
else if(name==true)
{live.config.vars[n]=v;}
else if(n==name)
return v;}
return false;}
live.config.vars={};live.config.update_callbacks={};live.config.position_in_url=false;live.config.set=function(name,value)
{if(!name)
return;live.config.vars[name]=value;setTimeout(function(){live.config.set_delay(name,value);},10);}
live.config.set_delay=function(name,value)
{setcookie('rt'+name,value);clearTimeout(live.url.timer);live.url.timer=setTimeout(function()
{live.url.update();},100);return false;}
live.config.get=function(name)
{var val=live.url.read(name);if(val==='0')
return 0;if(val!=false)
return val;if(name=='dc')
return 0;val=getcookie('rt'+name);if(!val)
val='';else if(val==='0')
val=0;return val;}
live.config.onupdate=function(name,callback)
{live.config.update_callbacks[name]=callback;}
live.map=null;live.map_lat=50;live.map_lon=10;live.map_zoom=4;live.map_roads=false;live.map_zoom_last=0;live.map_pos_last=[0,0,0,0];live.map_bounds_last=null;live.map_cc_div=null;live.map_changed_view_timer=null;live.map_google_is_loaded=false;live.map_layers={};live.hashcode=function(str)
{let hash=0;for(let i=0,len=str.length;i<len;i++){let chr=str.charCodeAt(i);hash=(hash<<5)-hash+chr;hash|=0;}
return Math.abs(hash);}
live.map_init=function(lat,lon,zoom)
{live.map_lat=lat;live.map_lon=lon;live.map_zoom=zoom;try{live.map_host=live.config.map_hosts[live.hashcode(window.navigator.userAgent)%live.config.map_hosts.length];}catch(e){}
if(!live.map_host)
live.map_host=live.config.map_hosts[0];live.map_start();}
live.map_tile_retry_onerror=function(e){var tile=e.tile;var options=e.target.options;if(typeof(tile.load_retries)=='undefined')
tile.load_retries=0;if(tile.src.substr(-1,1)!="?"&&tile.load_retries==0)
{setTimeout(function(){tile.src+="?";tile.load_retries++;},500);}
else if(tile.load_retries==1&&typeof(options.retry_search)!="undefined")
{var src=tile.src;var t=options.retry_subdomains;tile.src=src.replace('?','').replace(options.retry_search,options.retry_replace).replace("{S}",t[Math.floor(Math.random()*t.length)]);tile.load_retries++;}}
live.map_start=function()
{if(!document.getElementById("bo_gmap"))
return;var map_id="bo_gmap";live.debug("INIT");live.url.read(false);if(live.url.read('x')&&live.url.read('y'))
live.config.position_in_url=true;var map_lat=live.config.get('y');var map_lon=live.config.get('x');var map_zoom=live.config.get('z');var map_type=live.config.get('m');if(!live.config.get('gme')&&map_type.substr(0,1)=='g')
{map_type='';}
if(map_lat!=0&&map_lon!=0&&-85<map_lat&&map_lat<85)
{live.map_lat=map_lat;live.map_lon=map_lon;}
if(map_zoom>=live.config.min_zoom&&map_zoom<=live.config.max_zoom)
{live.map_zoom=parseInt(map_zoom);}
var osm_attr='Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>';var osm_attr_mob='&copy; <a href="https://www.openstreetmap.org/">OSM</a> <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>';live.map_layers.osm=L.tileLayer('https://'+live.map_host+'/carto/{z}/{x}/{y}.png',{maxZoom:16,maxNativeZoom:15,attribution:osm_attr,attr_mobile:osm_attr_mob,id:'osm',retry_search:live.map_host+'/carto',retry_replace:'{S}.tile.openstreetmap.org',retry_subdomains:['a','b','c']});live.map_layers.osm_nolabels=L.tileLayer('https://'+live.map_host+'/carto-nolabels/{z}/{x}/{y}.png',{maxZoom:16,attribution:osm_attr,attr_mobile:osm_attr_mob,id:'osm-nolabels'});live.map_layers.sentinel=L.tileLayer('https://'+live.map_host+'/eox_s2cloudless_2022/{z}/{y}/{x}.png',{maxZoom:15,minNativeZoom:2,maxNativeZoom:13,attribution:'&copy; <a href="https://maps.eox.at/#data" target="_blank">Sentinel-2 cloudless</a> - <a href="https://s2maps.eu" target="_blank">s2maps.eu</a> by <a href="https://eox.at" target="_blank">EOX IT Services GmbH</a> (Contains modified Copernicus Sentinel data 2022)',attr_mobile:'Sentinel-2 by eox.at',id:'sentinel'});live.map_layers.trans=L.tileLayer('https://'+live.map_host+'/trans/{z}/{y}/{x}.png',{maxZoom:15,minNativeZoom:2,maxNativeZoom:15,attribution:osm_attr,attr_mobile:osm_attr_mob,id:'trans'});live.map_layers.terrain=L.tileLayer('https://'+live.map_host+'/terrain/{z}/{x}/{y}.png',{maxZoom:15,minNativeZoom:2,maxNativeZoom:14,attribution:'Map tiles by <a href="https://stamen.com">Stamen Design</a>, under <a href="https://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>. Map data by <a href="https://openstreetmap.org">OpenStreetMap</a>, under <a href="https://www.openstreetmap.org/copyright">ODbL</a>.',attr_mobile:'Stamen Design / OSM',id:'terrain',retry_search:live.map_host,retry_replace:'stamen-tiles-{S}.a.ssl.fastly.net',retry_subdomains:['a','b','c']});live.map_show_attribution=function(name)
{$("#live_attributions").html(live.map_layers[name].options.attr_long);}
for(i in live.map_layers)
{live.map_layers[i].on('tileerror',live.map_tile_retry_onerror);if(is_mobile()==1&&typeof live.map_layers[i]!="undefined"&&typeof live.map_layers[i].options.attr_mobile!="undefined")
{live.map_layers[i].options.attr_long=live.map_layers[i].options.attribution;live.map_layers[i].options.attribution='<a href="javascript:void(0)" onclick="live.map_show_attribution(\''+i+'\');" id="live_attributions">'+live.map_layers[i].options.attr_mobile+'</a>';}}
live.map=new L.map(map_id,{center:[live.map_lat,live.map_lon],zoomControl:false,zoom:live.map_zoom,worldCopyJump:true,fadeAnimation:false,layers:[]});if(is_mobile()==1)
live.map.attributionControl.addAttribution('&copy; <a href="/blitzortung">lmaps.org</a>');else
live.map.attributionControl.addAttribution('Lightning data &copy; <a href="/blitzortung">Lightningmaps.org</a> and <a href="https://www.blitzortung.org" target="_blank">Blitzortung.org</a> contributors, <a href="/about" target="_blank">CC-BY-SA 4.0</a>');L.control.scale().addTo(live.map);L.Control.Watermark=L.Control.extend({onAdd:function(map){var img=document.createElement('div');img.href='';img.innerHTML='<a href="https://www.lightningmaps.org/blitzortung/"><img src="/Images/app_icon_shadow.png" id="ctrl_lmimg" style="width:40px"></a>';img.id='ctrl_img';return img;},onRemove:function(map){}});live.map_panes={};live.map_panes.coverage=live.map.createPane('coverage',live.map.getPane('markerPane'));live.map_panes.stations=live.map.createPane('stations',live.map.getPane('markerPane'));live.map_panes.sta_lines=live.map.createPane('sta_lines',live.map.getPane('markerPane'));live.map_panes.thunder=live.map.createPane('thunder',live.map.getPane('markerPane'));live.map_panes.accurac=live.map.createPane('accurac',live.map.getPane('markerPane'));live.map_panes.strokes=live.map.createPane('strokes',live.map.getPane('markerPane'));live.map_panes.circles=live.map.createPane('circles',live.map.getPane('markerPane'));live.map_panes.position=live.map.createPane('position',live.map.getPane('markerPane'));L.control.watermark=function(opts){return new L.Control.Watermark(opts);}
L.control.watermark({position:'bottomright'}).addTo(live.map);live.map.zoom_control=L.control.zoom({'position':'topleft'});live.map.zoom_control.addTo(live.map);live.map_update_options();live.map.on('click',function(e){live.menu.hide_all(true);return false;});live.map.on('dblclick',function(x){live.url.noupdate=true;return false;});live.map.on('movestart',function(){if(live.config.tiles_hide_on_drag===true||live.config.tiles_hide_on_drag>live.map.getZoom())
live.tiles.hide();if(live.config.stations_hide_on_drag===true||live.config.stations_hide_on_drag>live.map.getZoom())
live.detectors.hide();return false;});live.map.on('moveend',function(){live.config.set('y',Math.round(live.map.getCenter().lat*1E4)/1E4);live.config.set('x',Math.round(live.map.getCenter().lng*1E4)/1E4);live.config.set('z',parseInt(live.map.getZoom()));live.menu.hide_all(true);live.map_changed_view();live.detectors.map_changed_view();if(live.config.tiles_hide_on_drag)
live.tiles.unhide();if(live.config.stations_hide_on_drag)
live.detectors.unhide();return false;});live.map.on('zoomend',function(){live.config.set('z',this.getZoom());live.menu.hide_all(true);live.map_changed_view();live.thunder.set(null);live.detectors.map_changed_view();if(live.config.stations_hide_on_drag===true||live.config.stations_hide_on_drag>live.map.getZoom())
live.detectors.hide();return false;});live.map.on('baselayerchange',function(){live.config.set('m',live.map_style);live.map_update_options();return false;});window.onblur=function(){live.window_is_focused=false;live.url.update();};window.onfocus=function(){live.window_is_focused=true;};$(window).resize(function(){live.map_update_options();});if(map_type.match(/[a-z]+/i))
live.map_style_set(map_type);else
live.map_style_set();live.url.read();live.config.onupdate("x",live.map_config_update);live.config.onupdate("y",live.map_config_update);live.config.onupdate("z",live.map_config_update);live.config.onupdate("m",live.map_config_update);live.map_start_delay();}
live.map_start_delay=function()
{if(typeof live.map.getBounds()=='undefined')
{setTimeout(live.map_start_delay,100);return false;}
live.debug("INIT delay");live.map_zoom_last=live.map.getZoom();live.map_bounds_last=L.latLngBounds(live.map.getBounds().getSouthWest(),live.map.getBounds().getNorthEast());live.control={};L.Control.Message=L.Control.extend({onAdd:function(map){var msg=document.createElement('div');msg.title='';msg.className='live_ctrl';msg.index=3;msg.id='ctrl_msg';msg.style.display='none';return msg;},onRemove:function(map){}});live.marker.init();live.message.init();live.thunder.init();live.stroke_info.addControl();live.stroke_settings.addControl();live.clock.addControl();live.settings.addControl();live.detectors.addControl();live.sound.addControl();live.position.addControl();live.data.init();live.detectors.init();live.tiles.init();live.daynight.init();live.darkness.init();live.position.init();live.clock.init();live.archive.init();live.fullscreen.init();if(is_mobile())
{$("body").scrollTop(0);$(window).on('resize',function(){$("body").scrollTop(0);});}
return true;}
live.map_changed_view=function()
{var c=live.map.getCenter();if(c.lat>82||c.lat<-82)
{live.map.panTo([c.lat<0?-82:82,c.lng]);}
clearTimeout(live.map_changed_view_timer);live.map_changed_view_timer=setTimeout(function()
{try{var ne=live.map.getBounds().getNorthEast();var sw=live.map.getBounds().getSouthWest();if(live.map_zoom_last>live.map.getZoom()||ne.lat>live.map_pos_last[0]||ne.lng>live.map_pos_last[1]||sw.lat<live.map_pos_last[2]||sw.lng<live.map_pos_last[3])
{if(!live.data.update('v'))
{setTimeout(live.map_changed_view,1000);return;}}
live.marker.check_strokes(true);live.map_pos_last[0]=ne.lat;live.map_pos_last[1]=ne.lng;live.map_pos_last[2]=sw.lat;live.map_pos_last[3]=sw.lng;live.map_zoom_last=live.map.getZoom();}
catch(e){console.log(e);}},500);}
live.map_update_options=function()
{live.map.options.minZoom=live.config.min_zoom;live.map.options.maxZoom=live.config.max_zoom;if(is_mobile()==1)
{live.map.zoom_control.setPosition('bottomleft');}}
live.map_load_google=function(value)
{if(live.map_google_is_loaded)
{if(!window.google||!window.google.maps)
{setTimeout(function(){live.map_load_google(value);},100);}
else
{live.map_layers.google_terrain=L.gridLayer.googleMutant({type:'terrain'});live.map_layers.google_terrain_noroads=L.gridLayer.googleMutant({type:'terrain',styles:[{"featureType":"road","stylers":[{"visibility":"off"}]}]});live.map_layers.google_roadmap=L.gridLayer.googleMutant({type:'roadmap'});live.map_layers.google_roadmap_noroads=L.gridLayer.googleMutant({type:'roadmap',styles:[{"featureType":"road","stylers":[{"visibility":"off"}]}]});live.map_layers.google_satellite=L.gridLayer.googleMutant({type:'satellite'});live.map_layers.google_hybrid=L.gridLayer.googleMutant({type:'hybrid'});live.map_style_set(value);setTimeout(function(){$(".leaflet-google-mutant").css({"height":"100%"});},2000);}
return;}
live.map_google_is_loaded=1;var script=document.createElement('script');script.type='text/javascript';script.async=true;script.src='https://maps.googleapis.com/maps/api/js?libraries=places&v=3&key=AIzaSyBJvhX2ObDXcS8ZuE8ksreZ_ooH8wNTDgA';document.getElementsByTagName('head')[0].appendChild(script);setTimeout(function(){live.map_load_google(value);},100);}
live.map_style_set=function(value)
{var type,type_overlay=null;live.map_roads=false;if(typeof value!="undefined")
{if(value.substr(0,1)=='g'&&!live.map_google_is_loaded)
{live.map_load_google(value);return;}}
switch(value)
{case'grs':live.map_roads=true;type=live.map_layers.google_roadmap;break;case'grn':type=live.map_layers.google_roadmap_noroads;break;case'gts':live.map_roads=true;type=live.map_layers.google_terrain;break;case'gtn':type=live.map_layers.google_terrain_noroads;break;case'gxs':live.map_roads=true;type=live.map_layers.google_hybrid;break;case'gxn':type=live.map_layers.google_satellite;break;default:value='ses';case'ses':live.map_roads=true;type_overlay=live.map_layers.trans;case'sen':type=live.map_layers.sentinel;break;case'sts':case'stn':live.map_roads=true;type=live.map_layers.terrain;break;case'msh':type=live.map_layers.maptiler_sat_hybrid;break;case'osn':type=live.map_layers.osm;break;case'oss':live.map_roads=true;type=live.map_layers.osm;value='oss';break;}
for(i in live.map_layers)
{live.map_layers[i].removeFrom(live.map);}
type.addTo(live.map);if(type_overlay)
type_overlay.addTo(live.map);live.map_style=value;live.config.set('m',live.map_style);live.settings.description_update();}
live.map_style_set2=function(v)
{live.map_style_set(v+(live.map_roads?'s':'n'));}
live.map_style_get=function()
{return live.map_style.substr(0,2);}
live.map_style_roads_get=function()
{return live.map_roads;}
live.map_style_roads_toggle=function()
{live.map_style_set(live.map_style_get()+(live.map_roads?'n':'s'));}
live.map_config_update=function(val,name)
{console.log(name+"="+val);switch(name)
{case'm':live.map_style_set(val);break;case'x':case'y':case'z':live.map.flyTo([live.config.get('x'),live.config.get('y')],parseInt(live.config.get('z')));break;}}
live.lang=function(id)
{if(typeof lm_lang["lm_live_"+id]=="undefined")
return id;return lm_lang["lm_live_"+id];}
var _T=live.lang;live.menu={};live.menu.settings_values={};live.menu.timeout=null;live.menu.noclose=false;live.menu.add_option=function(id,elem,opts)
{var functions_end=[];id="set_"+id;live.menu.settings_values[id]={};if(typeof opts.descr=="undefined")
opts.descr=_T(id);if(typeof opts.text=="undefined")
opts.text=_T(id+'_info');if(typeof opts.type=="undefined")
opts.type='radio';var val_name={};var text="<form class='live_set' id='live_"+id+"' onsubmit='return false;'>"
+"<span class='live_set_descr'>"+opts.descr+":</span>"
+" <span class='live_set_group' id='"+id+"'> ";if(typeof opts.html!="undefined")
text+=opts.html;for(i in opts.data)
{var description,D=opts.data[i];if(D==null)
continue;if(typeof D.text=="undefined")
description=_T(id+'_'+i);else
description=D.text;if(opts.type=='radio')
{var id_name=id+"_select_"+i;val_name[0]=id+"_value";text+="<input type='radio' value='"+D.value+"' name='"+val_name[0]+"' id='"+id_name+"'><label for='"+id_name+"'>"+description+" </label> ";}
else if(opts.type=='check')
{var id_name=id+"_select_"+i;val_name[i]=id+"_"+i+"_value";text+="<input type='checkbox' value='"+D.value+"' name='"+val_name[i]+"' id='"+id_name+"'><label for='"+id_name+"'>"+description+" </label> ";}
else if(opts.type=='text')
{var id_name=id+"_"+i+"_select";val_name[i]=id+"_"+i+"_value";if(description&&description!=id+'_'+i&&D.type!="button")
text+=description+":";if(D.type=="date")
{if(is_mobile())
{text+='<input type="date" value="" name="'+val_name[i]+'" id="'+id_name+'" class="live_set_date"> ';}
else
{text+='<input data-toggle="datepicker" value="" name="'+val_name[i]+'" id="'+id_name+'" class="live_set_text live_set_date" autocomplete="off"> ';text+='<div id="'+id_name+'_datepicker" class="live_set_datepicker"></div> ';functions_end.push({exec:function(O)
{if(typeof O.main=="object")
{for(i in O.main)
O.preset[i]=O.main[i];}
$('#'+O.id).datepicker(O.preset);},opts:{preset:{inline:false,container:'#'+id_name+'_datepicker',format:'yyyy-mm-dd',weekStart:1,autoShow:false,autoHide:true},main:D.opts,id:id_name}});}}
else if(D.type=="select")
{text+='<select name="'+val_name[i]+'" id="'+id_name+'" class="live_set_select">';for(j in D.opts)
text+='<option value="'+j+'">'+D.opts[j]+'</option>';text+='</select> ';}
else if(D.type=="button")
{text+='<input type="submit" value="'+description+'" id="'+id_name+'" class="live_set_submit"> ';functions_end.push({exec:function(O)
{$("#"+O.button_id).on("click",function()
{opts.apply(O.values);});},opts:{button_id:id_name,values:live.menu.settings_values[id]}});}
else
{text+='<input type="text" value="" name="'+val_name[i]+'" id="'+id_name+'" class="live_set_text"> ';}}}
text+=" </span>";if(typeof opts.text!="undefined")
text+="<div class='live_set_info'>"+opts.text+"</div>";text+="</form>";elem.append(text);if(opts.type=='radio')
{if(typeof opts.value!="undefined")
{var v=opts.value();$("input[name='"+val_name[0]+"'][value="+v+"]").prop("checked",true);live.menu.settings_values[id][val_name[0]]=v;}
if(typeof opts.action!="undefined")
{$("#"+id+" input").on('click touchstart',function(e)
{var v=$("input[name='"+val_name[0]+"']:checked").val();opts.action(v,0,false);live.menu.settings_values[id][val_name[0]]=v;});}}
else if(opts.type=='check')
{if(typeof opts.value_type!="undefined")
{if(opts.value_type=="bitmask")
{var mask=opts.value();for(var name in val_name)
{if(mask&opts.data[name].value)
{$("input[name='"+val_name[name]+"']").prop("checked",true);}
if(typeof opts.action!="undefined")
{$("input[name='"+val_name[name]+"']").on('change select',function()
{var mask=opts.value();var checked=$(this).prop("checked");var value=$(this).prop("value");if(checked)
mask|=value;else
mask&=~value;opts.action(mask);});}}}}}
else
{for(var name in val_name)
{if(typeof opts.value!="undefined")
{var v=opts.value(name);$("[name='"+val_name[name]+"']").val(v);live.menu.settings_values[id][name]=v;}
if(typeof opts.action!="undefined")
{$("[name='"+val_name[name]+"']").attr("set_name",name).on('change select',function()
{var v=$(this).val();var name=$(this).attr('set_name');opts.action(v,name);live.menu.settings_values[id][name]=v;}).on('click',function()
{live.menu.noclose=true;});}}}
for(i in functions_end)
{functions_end[i].exec(functions_end[i].opts);}}
live.menu.button=function(id,opts)
{var name=id+"Button";var hpos="right",vpos="top";if(typeof opts.position=="undefined")
opts.position="topright";if(opts.position=="topleft")
{hpos="left";}
else if(opts.position=="bottomleft")
{vpos="bottom";hpos="left";}
else if(opts.position=="bottomright")
{vpos="bottom";}
L.Control[name]=L.Control.extend({onAdd:function(map){var button;button=document.createElement('div');button.className='live_ctrl live_ctrl_'+hpos+' live_ctrl_'+vpos;button.id='ctrl_'+id;L.DomEvent.disableClickPropagation(button);var button_html=$(opts.html);button_html.on('click',function()
{return false;});$(button).on('click mouseenter touchstart',function(){if($(".ctrl_detail").length&&!$("#ctrl_detail_"+id).length)
live.menu.hide_all();if(!$(".ctrl_detail").length)
{live.menu.hide_all();var elem=$("<div class='ctrl_detail' id='ctrl_detail_"+id+"'></div>");$(this).append(elem);opts.content(elem);live.menu.noclose=false;}
if(live.menu.timeout)
clearTimeout(live.menu.timeout);}).on('mouseleave',function(){if(!live.menu.noclose)
live.menu.timeout=setTimeout(live.menu.hide_all,1000);}).append(button_html);return button;},onRemove:function(map){}});live.control[id]=function(o)
{return new L.Control[name](o);}
return live.control[id]({position:opts.position}).addTo(live.map);}
live.menu.hide_all=function(force)
{if((live.config.get("menuopen")!=1&&!$(".datepicker-container").length)||force)
{$(".ctrl_detail").remove();$(".datepicker-container").remove();}}