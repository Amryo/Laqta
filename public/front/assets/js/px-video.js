function InitPxVideo(e){"use strict";function n(e){return t(e.split(" --\x3e ")[1])}function t(e){if(null==e)return 0;var n;return n=e.split(",")[0].split(":"),Math.floor(60*n[0]*60)+Math.floor(60*n[1])+Math.floor(n[2])}function s(e){for(e.subcount=0;n(e.captions[e.subcount][0])<e.movie.currentTime.toFixed(1);)if(e.subcount++,e.subcount>e.captions.length-1){e.subcount=e.captions.length-1;break}}function o(e){e.captionsBtnContainer.className="px-video-captions-btn-container show",e.captionsContainer.parentNode.parentNode.className="has-captions",e.isCaptionDefault&&(e.captionsContainer.className="px-video-captions show",e.captionsBtn.setAttribute("checked","checked"))}function i(e){e.fullscreenElement||e.mozFullScreenElement||e.webkitFullscreenElement||e.msFullscreenElement||(e.requestFullscreen||e.msRequestFullscreen||e.mozRequestFullScreen||e.webkitRequestFullscreen).call(e)}function a(){document.fullscreen||document.mozFullScreen||document.webkitIsFullScreen||document.msFullscreenElement?(c.fullScreenBtn.checked=!0,c.container.setAttribute("style","width: 100%; height: 100%;"),c.controls.className="px-video-controls js-fullscreen-controls",c.captionsContainer.className="px-video-captions js-fullscreen-captions",c.movie.setAttribute("width","100%"),c.movie.setAttribute("height","100%")):(c.fullScreenBtn.checked=!1,c.controls.className="px-video-controls",c.captionsContainer.className="px-video-captions",c.movie.setAttribute("width",c.movieWidth),c.movie.setAttribute("height",c.movieHeight))}function r(){(document.exitFullscreen||document.msExitFullscreen||document.mozCancelFullScreen||document.webkitExitFullscreen).call(document)}var c={};if(c.arBrowserInfo=function(){navigator.appVersion;var e,n,t,s=navigator.userAgent,o=navigator.appName,i=""+parseFloat(navigator.appVersion),a=parseInt(navigator.appVersion,10);return-1!==navigator.appVersion.indexOf("Windows NT")&&-1!==navigator.appVersion.indexOf("rv:11")?(o="IE",i="11;"):-1!==(n=s.indexOf("MSIE"))?(o="IE",i=s.substring(n+5)):-1!==(n=s.indexOf("Chrome"))?(o="Chrome",i=s.substring(n+7)):-1!==(n=s.indexOf("Safari"))?(o="Safari",i=s.substring(n+7),-1!==(n=s.indexOf("Version"))&&(i=s.substring(n+8))):-1!==(n=s.indexOf("Firefox"))?(o="Firefox",i=s.substring(n+8)):(e=s.lastIndexOf(" ")+1)<(n=s.lastIndexOf("/"))&&(o=s.substring(e,n),i=s.substring(n+1),o.toLowerCase()==o.toUpperCase()&&(o=navigator.appName)),-1!==(t=i.indexOf(";"))&&(i=i.substring(0,t)),-1!==(t=i.indexOf(" "))&&(i=i.substring(0,t)),a=parseInt(""+i,10),isNaN(a)&&(i=""+parseFloat(navigator.appVersion),a=parseInt(navigator.appVersion,10)),[o,a]}(),c.browserName=c.arBrowserInfo[0],c.browserMajorVersion=c.arBrowserInfo[1],"IE"===c.browserName&&(8===c.browserMajorVersion||9===c.browserMajorVersion))return!1;if(c.isSmartphoneOrTablet=/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent),c.isSmartphoneOrTablet)return!1;void 0===e.debug&&(e.debug=!1),c.debug=e.debug,e.debug&&console.log(c.browserName+" "+c.browserMajorVersion),void 0===e.videoTitle||""===e.videoTitle?c.playAriaLabel="Play":c.playAriaLabel="Play video, "+e.videoTitle,c.container=document.getElementById(e.videoId),c.movie=c.container.getElementsByTagName("video")[0],c.controls=c.container.getElementsByClassName("px-video-controls")[0],c.movie.removeAttribute("controls"),c.randomNum=Math.floor(1e4*Math.random()),e.debug&&console.log("Inserting custom video controls"),c.controls.innerHTML='<div class="px-progress-bar"><progress class="px-video-progress" max="100" value="0"><span>0</span>% played</progress></div><div class="px-video-time"><span class="sr-only">time</span> <span class="px-video-duration">00:00</span></div><div class="px-video-playback-buttons"><button class="px-video-restart"><span class="sr-only">Restart</span></button><button class="px-video-rewind"><span class="sr-only">rewind <span class="px-seconds">10</span> seconds</span></button><button class="px-video-play" aria-label="'+c.playAriaLabel+'"><span class="sr-only">Play</span></button><button class="px-video-pause hide"><span class="sr-only">Pause</span></button><button class="px-video-forward"><span class="sr-only">forward <span class="px-seconds">10</span> seconds</span></button></div><div class="px-video-volume-controls"><div class="px-video-mute-btn-container"><input class="px-video-mute sr-only" id="btnMute'+c.randomNum+'" type="checkbox" /><label id="labelMute'+c.randomNum+'" for="btnMute'+c.randomNum+'"><span class="sr-only">Mute</span></label></div><div class="px-video-volume-slider"><label for="volume'+c.randomNum+'" class="sr-only">Volume:</label><input id="volume'+c.randomNum+'" class="px-video-volume" type="range" min="0" max="10" value="5" /></div><div class="px-video-captions-btn-container hide"><input class="px-video-btnCaptions sr-only" id="btnCaptions'+c.randomNum+'" type="checkbox" /><label for="btnCaptions'+c.randomNum+'"><span class="sr-only">Captions</span></label></div><div class="px-video-fullscreen-btn-container show"><input class="px-video-btnFullScreen sr-only" id="btnFullscreen'+c.randomNum+'" type="checkbox" /><label for="btnFullscreen'+c.randomNum+'"><span class="sr-only">Fullscreen</span></label></div></div>',c.movieWidth=c.movie.width,c.movieWidth<360&&(c.movieWidth=360),c.labelMute=document.getElementById("labelMute"+c.randomNum),c.labelMuteOffset=c.movieWidth-390,"Firefox"===c.browserName&&(c.labelMuteOffset=c.labelMuteOffset-10),c.labelMuteOffset<0&&(c.labelMuteOffset=0),c.labelMute.setAttribute("style","margin-left:"+c.labelMuteOffset+"px");for(var l="",u=c.movie.childNodes,d=0;d<u.length;d++)"track"===u[d].nodeName.toLowerCase()&&"captions"===u[d].getAttribute("kind")&&(l=u[d].getAttribute("src"));if(c.captionExists=!0,""===l?(c.captionExists=!1,e.debug&&console.log("No caption track found.")):e.debug&&console.log("Caption track found; URI: "+l),void 0===e.captionsOnDefault&&(e.captionsOnDefault=!0),c.isCaptionDefault=e.captionsOnDefault,void 0===e.seekInterval&&(e.seekInterval=10),c.seekInterval=e.seekInterval,c.btnPlay=c.container.getElementsByClassName("px-video-play")[0],c.btnPause=c.container.getElementsByClassName("px-video-pause")[0],c.btnRestart=c.container.getElementsByClassName("px-video-restart")[0],c.btnRewind=c.container.getElementsByClassName("px-video-rewind")[0],c.btnForward=c.container.getElementsByClassName("px-video-forward")[0],c.btnVolume=c.container.getElementsByClassName("px-video-volume")[0],c.btnMute=c.container.getElementsByClassName("px-video-mute")[0],c.progressBar=c.container.getElementsByClassName("px-video-progress")[0],c.progressBarSpan=c.progressBar.getElementsByTagName("span")[0],c.captionsContainer=c.container.getElementsByClassName("px-video-captions")[0],c.captionsBtn=c.container.getElementsByClassName("px-video-btnCaptions")[0],c.captionsBtnContainer=c.container.getElementsByClassName("px-video-captions-btn-container")[0],c.duration=c.container.getElementsByClassName("px-video-duration")[0],c.txtSeconds=c.container.getElementsByClassName("px-seconds"),c.fullScreenBtn=c.container.getElementsByClassName("px-video-btnFullScreen")[0],c.fullScreenBtnContainer=c.container.getElementsByClassName("px-video-fullscreen-btn-container")[0],c.txtSeconds[0].innerHTML=c.seekInterval,c.txtSeconds[1].innerHTML=c.seekInterval,c.isTextTracks=!1,c.movie.textTracks&&(c.isTextTracks=!0),c.btnPlay.addEventListener("click",function(){c.movie.play(),c.btnPlay.className="px-video-play hide",c.btnPause.className="px-video-pause px-video-show-inline",c.btnPause.focus()},!1),c.btnPause.addEventListener("click",function(){c.movie.pause(),c.btnPlay.className="px-video-play px-video-show-inline",c.btnPause.className="px-video-pause hide",c.btnPlay.focus()},!1),c.btnRestart.addEventListener("click",function(){c.movie.currentTime=0,c.isTextTracks||(c.subcount=0),c.movie.play(),c.btnPlay.className="px-video-play hide",c.btnPause.className="px-video-pause px-video-show-inline"},!1),c.btnRewind.addEventListener("click",function(){var e=c.movie.currentTime-c.seekInterval;c.movie.currentTime=e<0?0:e,c.isTextTracks||s(c)},!1),c.btnForward.addEventListener("click",function(){var e=c.movie.currentTime+c.seekInterval;e>c.movie.duration?c.movie.currentTime=c.movie.duration:c.movie.currentTime=e,c.isTextTracks||s(c)},!1),c.btnVolume.addEventListener("change",function(){c.movie.volume=parseFloat(this.value/10)},!1),c.btnMute.addEventListener("click",function(){!0===c.movie.muted?c.movie.muted=!1:c.movie.muted=!0},!1),c.btnMute.onkeypress=function(e){13==e.keyCode&&(e.preventDefault(),1==this.checked?this.checked=!1:this.checked=!0,!0===c.movie.muted?c.movie.muted=!1:c.movie.muted=!0)},c.movie.addEventListener("timeupdate",function(){c.secs=parseInt(c.movie.currentTime%60),c.mins=parseInt(c.movie.currentTime/60%60),c.secs=("0"+c.secs).slice(-2),c.mins=("0"+c.mins).slice(-2),c.duration.innerHTML=c.mins+":"+c.secs},!1),c.movie.addEventListener("timeupdate",function(){c.percent=100/c.movie.duration*c.movie.currentTime,c.percent>0&&(c.progressBar.value=c.percent,c.progressBarSpan.innerHTML=c.percent)},!1),c.progressBar.addEventListener("click",function(e){c.pos=(e.pageX-this.offsetLeft)/this.offsetWidth,c.movie.currentTime=c.pos*c.movie.duration,c.isTextTracks||s(c)}),c.fullScreenBtn.addEventListener("click",function(){this.checked?i(c.container):r()},!1),c.fullScreenBtn.onkeypress=function(e){13==e.keyCode&&(e.preventDefault(),1==this.checked?(this.checked=!1,r()):(this.checked=!0,i(c.container)))},c.movie.addEventListener("ended",function(){c.captionsContainer.innerHTML=""}),c.captionsBtn.addEventListener("click",function(){if(this.checked?c.captionsContainer.className="px-video-captions show":c.captionsContainer.className="px-video-captions hide",document.fullscreen||document.mozFullScreen||document.webkitIsFullScreen||document.msFullscreenElement){var e=c.captionsContainer.className;c.captionsContainer.className=e+" js-fullscreen-captions"}},!1),c.captionsBtn.onkeypress=function(e){13==e.keyCode&&(e.preventDefault(),1==this.checked?this.checked=!1:this.checked=!0,this.checked?c.captionsContainer.className="px-video-captions show":c.captionsContainer.className="px-video-captions hide")},c.captionExists){if("IE"===c.browserName&&10===c.browserMajorVersion||"IE"===c.browserName&&11===c.browserMajorVersion||"Firefox"===c.browserName&&c.browserMajorVersion>=31||"Chrome"===c.browserName&&43===c.browserMajorVersion||"Safari"===c.browserName&&c.browserMajorVersion>=7){e.debug&&console.log("Detected browser unable to play HTML5 captions; using custom captions"),c.isTextTracks=!1;for(var p={},m=c.movie.textTracks,v=0;v<m.length;v++)(p=c.movie.textTracks[v]).mode="hidden"}if(c.isTextTracks){e.debug&&console.log("textTracks supported"),o(c);for(p={},m=c.movie.textTracks,v=0;v<m.length;v++)(p=c.movie.textTracks[v]).mode="hidden","captions"===p.kind&&p.addEventListener("cuechange",function(){this.activeCues[0]&&(this.activeCues[0].hasOwnProperty("text")||""!==this.activeCues[0].text)&&(c.captionsContainer.innerHTML=this.activeCues[0].text)},!1)}else{var b;if(e.debug&&console.log("textTracks not supported so rendering captions 'manually'"),o(c),c.currentCaption="",c.subcount=0,c.captions=[],c.movie.addEventListener("timeupdate",function(){c.movie.currentTime.toFixed(1)>t(c.captions[c.subcount][0].split(" --\x3e ")[0])&&c.movie.currentTime.toFixed(1)<n(c.captions[c.subcount][0])&&(c.currentCaption=c.captions[c.subcount][1]),c.movie.currentTime.toFixed(1)>n(c.captions[c.subcount][0])&&c.subcount<c.captions.length-1&&c.subcount++,c.captionsContainer.innerHTML=c.currentCaption},!1),""!=l)window.XMLHttpRequest?b=new XMLHttpRequest:window.ActiveXObject&&(b=new ActiveXObject("Microsoft.XMLHTTP")),b.onreadystatechange=function(){if(4===b.readyState)if(200===b.status){e.debug&&console.log("xhr = 200"),c.captions=[];var n,t;n=b.responseText.split("\n\n");for(var s=0;s<n.length;s++)t=n[s],c.captions[s]=[],c.captions[s]=t.split("\n");c.captions.shift(),e.debug&&console.log("Successfully loaded the caption file via ajax.")}else e.debug&&console.log("There was a problem loading the caption file via ajax.")},b.open("get",l,!0),b.send()}if("Safari"===c.browserName&&7===c.browserMajorVersion){console.log("Safari 7 detected; removing track from DOM");m=c.movie.getElementsByTagName("track");c.movie.removeChild(m[0])}}else c.captionsContainer.className="px-video-captions hide";document.addEventListener("fullscreenchange",function(){a()},!1),document.addEventListener("mozfullscreenchange",function(){a()},!1),document.addEventListener("webkitfullscreenchange",function(){a()},!1),document.addEventListener("msfullscreenchange",function(){a()},!1)}