!function(j){function z(t){return 1==parseInt(t,10)}function I(t){var e=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);return e?{r:parseInt(e[1],16),g:parseInt(e[2],16),b:parseInt(e[3],16)}:{r:0,g:0,b:0}}j.image_map_pro_editor_content=function(){var t=j.image_map_pro_editor_current_settings(),e="";if("zoom-in"==t.editor.tool&&(e+='<div class="imp-editor-canvas-overlay" id="imp-editor-canvas-overlay-zoom-in"></div>'),"zoom-out"==t.editor.tool&&(e+='<div class="imp-editor-canvas-overlay" id="imp-editor-canvas-overlay-zoom-out"></div>'),"drag"!=t.editor.tool&&!t.editor.state.dragging||(e+='<div class="imp-editor-canvas-overlay" id="imp-editor-canvas-overlay-drag"></div>'),z(t.layers.enable_layers)){var i="",a="";e+='<select id="select-canvas-layer" data-editor-object-type="17">';for(var o=0;o<t.layers.layers_list.length;o++)a=t.editor.currentLayer==t.layers.layers_list[o].id?(i=t.layers.layers_list[o].image_url," selected"):"",e+='<option value="'+t.layers.layers_list[o].id+'" '+a+">"+t.layers.layers_list[o].title+"</option>";e+="</select>",e+='<img id="imp-editor-image" src="'+i+'">'}else""!=t.image.url&&(e+='<img id="imp-editor-image" src="'+t.image.url+'">');e+='<div id="imp-editor-shapes-container">';for(o=0;o<t.spots.length;o++){var r=t.spots[o];if(!z(t.layers.enable_layers)||parseInt(r.layerID,10)==parseInt(t.editor.currentLayer)){if("spot"==r.type)if(z(r.default_style.use_icon)){var s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"px;",s+="height: "+r.height+"px;",s+="margin-left: -"+r.width/2+"px;",s+="margin-top: -"+r.height/2+"px;","library"==r.default_style.icon_type?s+="background-image: none;":(s+="background-image: url("+r.default_style.icon_url+");",s+="background-position: center;",s+="background-repeat: no-repeat;"),e+='<div class="imp-editor-shape imp-editor-spot" data-id="'+r.id+'" data-editor-object-type="1" style="'+s+'"><div class="imp-selection" style="border-radius: '+r.default_style.border_radius+'px;"></div>';var d="";if(z(r.default_style.icon_is_pin)&&(d+="top: -50%;",d+="position: absolute;"),"library"==r.default_style.icon_type&&(d+="color: "+r.default_style.icon_fill+";",d+="line-height: "+r.height+"px;",e+='   <div class="imp-editor-spot-fontawesome-icon" style="'+(d+="font-size: "+r.height+"px;")+'">',e+='       <i class="fa fa-'+r.default_style.icon_fontawesome_id+'"></i>',e+="   </div>"),"custom"==r.default_style.icon_type&&0<r.default_style.icon_url.length&&(e+='   <img style="'+d+'" src="'+r.default_style.icon_url+'">'),z(r.default_style.icon_shadow)){var l="";l+="width: "+r.width+"px;",l+="height: "+r.height+"px;",z(r.default_style.icon_is_pin)||(l+="top: "+r.height/2+"px;"),e+='<div style="'+l+'" class="imp-editor-shape-icon-shadow"></div>'}e+="</div>"}else{var n=I(r.default_style.background_color),p=I(r.default_style.border_color);s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"px;",s+="height: "+r.height+"px;",s+="margin-left: -"+r.width/2+"px;",s+="margin-top: -"+r.height/2+"px;",s+="background: rgba("+n.r+", "+n.g+", "+n.b+", "+r.default_style.background_opacity+");",s+="border-color: rgba("+p.r+", "+p.g+", "+p.b+", "+r.default_style.border_opacity+");",s+="border-width: "+r.default_style.border_width+"px;",s+="border-style: "+r.default_style.border_style+";",s+="border-radius: "+r.default_style.border_radius+"px;",e+='<div class="imp-editor-shape imp-editor-spot" data-id="'+r.id+'" data-editor-object-type="1" style="'+s+'"><div class="imp-selection" style="border-radius: '+r.default_style.border_radius+'px;"></div></div>'}if("text"==r.type){var c=I(r.text.text_color);s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="font-family: "+r.text.font_family+";",s+="font-size: "+r.text.font_size*t.editor.zoom+"px;",s+="font-weight: "+r.text.font_weight+";",s+="color: rgba("+c.r+", "+c.g+", "+c.b+", "+r.text.text_opacity+");",e+='<div class="imp-editor-shape imp-editor-text" data-id="'+r.id+'" data-editor-object-type="8" style="'+s+'">',e+=r.text.text,e+='   <div class="imp-selection" style="border-radius: '+r.default_style.border_radius+'px;"></div>',e+="</div>"}if("rect"==r.type){n=I(r.default_style.background_color),p=I(r.default_style.border_color),s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"%;",s+="height: "+r.height+"%;","color"==r.default_style.background_type&&(s+="background: rgba("+n.r+", "+n.g+", "+n.b+", "+r.default_style.background_opacity+");"),s+="border-color: rgba("+p.r+", "+p.g+", "+p.b+", "+r.default_style.border_opacity+");",s+="border-width: "+r.default_style.border_width+"px;",s+="border-style: "+r.default_style.border_style+";",s+="border-radius: "+r.default_style.border_radius+"px;",e+='<div class="imp-editor-shape imp-editor-rect" data-id="'+r.id+'" data-editor-object-type="3" style="'+s+'">',e+='   <div class="imp-selection" style="border-radius: '+r.default_style.border_radius+'px;">',e+='       <div class="imp-selection-translate-boxes">',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-1" data-transform-direction="1" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-2" data-transform-direction="2" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-3" data-transform-direction="3" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-4" data-transform-direction="4" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-5" data-transform-direction="5" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-6" data-transform-direction="6" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-7" data-transform-direction="7" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-8" data-transform-direction="8" data-editor-object-type="5"></div>',e+="       </div>",e+="   </div>",e+="</div>"}if("oval"==r.type){n=I(r.default_style.background_color),p=I(r.default_style.border_color),s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"%;",s+="height: "+r.height+"%;","color"==r.default_style.background_type&&(s+="background: rgba("+n.r+", "+n.g+", "+n.b+", "+r.default_style.background_opacity+");"),s+="border-color: rgba("+p.r+", "+p.g+", "+p.b+", "+r.default_style.border_opacity+");",s+="border-width: "+r.default_style.border_width+"px;",s+="border-style: "+r.default_style.border_style+";",s+="border-radius: 100% 100%;",e+='<div class="imp-editor-shape imp-editor-oval" data-id="'+r.id+'" data-editor-object-type="2" style="'+s+'">',e+='   <div class="imp-selection" style="border-radius: 100% 100%;">',e+='       <div class="imp-selection-translate-boxes">',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-1" data-transform-direction="1" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-2" data-transform-direction="2" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-3" data-transform-direction="3" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-4" data-transform-direction="4" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-5" data-transform-direction="5" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-6" data-transform-direction="6" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-7" data-transform-direction="7" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-8" data-transform-direction="8" data-editor-object-type="5"></div>',e+="       </div>",e+="   </div>",e+="</div>"}if("poly"==r.type&&r.points){if(r.points.length<3)continue;n=I(r.default_style.background_color);var b=I(r.default_style.stroke_color);s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"%;",s+="height: "+r.height+"%;";var y="";y+="width: 100%;",y+="height: 100%;","color"==r.default_style.background_type?y+="fill: rgba("+n.r+", "+n.g+", "+n.b+", "+r.default_style.background_opacity+");":y+="fill: rgba(0, 0, 255, 0.25);",y+="stroke: rgba("+b.r+", "+b.g+", "+b.b+", "+r.default_style.stroke_opacity+");",y+="stroke-width: "+r.default_style.stroke_width+"px;",y+="stroke-dasharray: "+r.default_style.stroke_dasharray+";",y+="stroke-linecap: "+r.default_style.stroke_linecap+";",e+='<div class="imp-editor-shape imp-editor-poly" data-id="'+r.id+'" data-editor-object-type="4" style="'+s+'">',e+='   <div class="imp-editor-poly-svg-temp-control-point" data-editor-object-type="6"></div>';var _=t.general.width*(r.width/100),m=t.general.height*(r.height/100);e+='   <div class="imp-editor-svg-wrap" style="padding: '+r.default_style.stroke_width+"px; left: -"+r.default_style.stroke_width+"px; top: -"+r.default_style.stroke_width+'px;">',e+='       <svg class="imp-editor-poly-svg" viewBox="0 0 '+_+" "+m+'" preserveAspectRatio="none" style="'+y+'">',e+='           <polygon points="';for(var v=0;v<r.points.length;v++){e+=r.default_style.stroke_width+r.points[v].x/100*(_-2*r.default_style.stroke_width)+","+(r.default_style.stroke_width+r.points[v].y/100*(m-2*r.default_style.stroke_width))+" "}e+='           "></polygon>',e+="       </svg>",e+="   </div>",e+='       <svg class="imp-editor-shape-poly-svg-overlay" viewBox="0 0 '+_+" "+m+'" preserveAspectRatio="none">',e+='           <polygon points="';for(v=0;v<r.points.length;v++){e+=r.points[v].x/100*_+","+r.points[v].y/100*m+" "}e+='           "></polygon>',e+="       </svg>",e+='   <div class="imp-selection imp-expanded-selection">',e+='       <div class="imp-selection-translate-boxes">',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-1" data-transform-direction="1" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-2" data-transform-direction="2" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-3" data-transform-direction="3" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-4" data-transform-direction="4" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-5" data-transform-direction="5" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-6" data-transform-direction="6" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-7" data-transform-direction="7" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-8" data-transform-direction="8" data-editor-object-type="5"></div>',e+="       </div>",e+="   </div>";for(v=0;v<r.points.length;v++)e+='       <div class="imp-poly-control-point" data-editor-object-type="7" data-index="'+v+'" style="left: '+r.points[v].x+"%; top: "+r.points[v].y+'%;"></div>';e+="</div>"}if("path"==r.type){var f,g=j.pathParse(r.d).absNormalize(),u=j.getMinMaxValues(g);g=j.offsetPath(g,-1*u.minX,-1*u.minY),f=j.serializePath(g);n=I(r.default_style.background_color),b=I(r.default_style.stroke_color),s="";s+="left: "+r.x+"%;",s+="top: "+r.y+"%;",s+="width: "+r.width+"%;",s+="height: "+r.height+"%;";y="";y+="width: 100%;",y+="height: 100%;","color"==r.default_style.background_type?y+="fill: rgba("+n.r+", "+n.g+", "+n.b+", "+r.default_style.background_opacity+");":y+="fill: rgba(0, 0, 255, 0.25);",y+="stroke: rgba("+b.r+", "+b.g+", "+b.b+", "+r.default_style.stroke_opacity+");",y+="stroke-width: "+r.default_style.stroke_width+"px;",y+="stroke-dasharray: "+r.default_style.stroke_dasharray+";",y+="stroke-linecap: "+r.default_style.stroke_linecap+";",e+='<div class="imp-editor-shape imp-editor-path" data-id="'+r.id+'" data-editor-object-type="16" style="'+s+'">';_=t.general.width*(r.width/100),m=t.general.height*(r.height/100);e+='   <div class="imp-editor-svg-wrap" style="padding: '+r.default_style.stroke_width+"px; left: -"+r.default_style.stroke_width+"px; top: -"+r.default_style.stroke_width+'px;">',e+='       <svg class="imp-editor-path-svg" viewBox="0 0 '+_+" "+m+'" preserveAspectRatio="none" style="'+y+'">',e+='           <path d="'+f+'"></path>',e+="       </svg>",e+="   </div>",e+='   <div class="imp-selection imp-expanded-selection">',e+='       <div class="imp-selection-translate-boxes">',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-1" data-transform-direction="1" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-2" data-transform-direction="2" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-3" data-transform-direction="3" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-4" data-transform-direction="4" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-5" data-transform-direction="5" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-6" data-transform-direction="6" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-7" data-transform-direction="7" data-editor-object-type="5"></div>',e+='           <div class="imp-selection-translate-box imp-selection-translate-box-8" data-transform-direction="8" data-editor-object-type="5"></div>',e+="       </div>",e+="   </div>",e+="</div>"}}}e+="</div>",e+='<div id="imp-editor-image-backgrounds-container">';for(o=0;o<t.spots.length;o++){r=t.spots[o];if(!z(t.layers.enable_layers)||parseInt(r.layerID,10)==parseInt(t.editor.currentLayer)){s="";s+="left: "+(r.x_image_background+r.default_style.background_image_offset_x)+"%;",s+="top: "+(r.y_image_background+r.default_style.background_image_offset_y)+"%;",s+="width: "+r.width_image_background+"%;",s+="height: "+r.height_image_background+"%;","image"==r.default_style.background_type&&r.default_style.background_image_url&&(s+="background-image: url("+r.default_style.background_image_url+");",s+="opacity: "+r.default_style.background_image_opacity+";",s+="transform: scale("+r.default_style.background_image_scale+");"),e+='<div class="imp-shape-background-image" style="'+s+'" data-id="'+r.id+'"></div>'}}e+="</div>";for(r=void 0,o=0;o<t.spots.length;o++)if(t.spots[o].id==t.editor.selected_shape){r=t.spots[o];break}if(r&&"text"!=r.type&&z(r.tooltip.enable_tooltip)&&z(t.tooltips.enable_tooltips)&&!z(r.use_connected_shape_tooltip)){var h="";n=I(r.tooltip_style.background_color),p=I(r.tooltip_style.border_color);h+="background: rgba("+n.r+", "+n.g+", "+n.b+", "+r.tooltip_style.background_opacity+");",h+="padding: "+r.tooltip_style.padding+"px;",h+="border-radius: "+r.tooltip_style.border_radius+"px;",z(r.tooltip_style.auto_width)||(h+="width: "+r.tooltip_style.width+"px;");var x="";"top"==r.tooltip_style.position&&(x+='   <div class="hs-arrow hs-arrow-bottom" style="border-top-color: rgba('+n.r+", "+n.g+", "+n.b+", "+r.tooltip_style.background_opacity+');"></div>'),"bottom"==r.tooltip_style.position&&(x+='   <div class="hs-arrow hs-arrow-top" style="border-bottom-color: rgba('+n.r+", "+n.g+", "+n.b+", "+r.tooltip_style.background_opacity+');"></div>'),"left"==r.tooltip_style.position&&(x+='   <div class="hs-arrow hs-arrow-right" style="border-left-color: rgba('+n.r+", "+n.g+", "+n.b+", "+r.tooltip_style.background_opacity+');"></div>'),"right"==r.tooltip_style.position&&(x+='   <div class="hs-arrow hs-arrow-left" style="border-right-color: rgba('+n.r+", "+n.g+", "+n.b+", "+r.tooltip_style.background_opacity+');"></div>');var w="";w+=j.squaresRendererRenderObject(r.tooltip_content.squares_settings);var k="";k+='<div id="imp-editor-tooltip-bar-wrap">',z(t.editor.transform_tooltip_mode)?(k+='<div data-editor-object-type="14" class="imp-editor-tooltip-bar-button"><i class="fa fa-times" aria-hidden="true"></i> Reset</div>',k+='<div data-editor-object-type="13" class="imp-editor-tooltip-bar-button imp-editor-tooltip-bar-button-blue"><i class="fa fa-check" aria-hidden="true"></i> Done</div>'):(k+='<div data-editor-object-type="10" data-wcp-tooltip="Tooltip Style" data-wcp-tooltip-position="top" class="imp-editor-tooltip-bar-button"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>',k+='<div data-editor-object-type="11" data-wcp-tooltip="Transform Tooltip" data-wcp-tooltip-position="top" class="imp-editor-tooltip-bar-button"><i class="fa fa-arrows" aria-hidden="true"></i></div>',k+='<div data-editor-object-type="12" data-wcp-tooltip="Tooltip Content" data-wcp-tooltip-position="top" class="imp-editor-tooltip-bar-button"><i class="fa fa-font" aria-hidden="true"></i></div>');e+='<div data-editor-object-type="9" id="imp-editor-shape-tooltip" style="'+h+'"><div id="imp-editor-shape-tooltip-content-wrap">'+w+"</div>"+x+(k+="</div>")+'   <div class="imp-selection imp-expanded-selection">       <div class="imp-selection-translate-boxes">           <div class="imp-selection-translate-box imp-selection-translate-box-4" data-transform-direction="4" data-editor-object-type="15"></div>           <div class="imp-selection-translate-box imp-selection-translate-box-8" data-transform-direction="8" data-editor-object-type="15"></div>       </div>   </div></div>'}return e+="</div>"}}(jQuery,(window,document));