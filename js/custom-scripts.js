// Toggle menu on click
document.querySelector('#menu-toggler').addEventListener('click', (e) => {
	toggleBodyClass('menu-active');
});

function toggleBodyClass(className) {
	document.body.classList.toggle(className);
}
jQuery('body').removeClass('image-filters-enabled');

// remove entry-content wrapper before Map
jQuery( "#app" ).closest(".entry-content").removeClass(function() {
  	return jQuery( this ).attr( "class" );
});

// ADD Facebook icon before the WMPL icon to fit in the navbar
var facebookIcon = '<li class="facebookIcon" style="height: 30px;margin-right:20px;margin-left:20px;">'+
'							<a class="icon icon-facebook" href="https://www.facebook.com/heritagemap/" target="_blank" >'+
'								<svg xmlns="http://www.w3.org/2000/svg" width="26.626" height="26.626" viewBox="0 0 26.626 26.626">'+
' 									<g id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square" transform="translate(0.5 0.5)">'+
' 										<path id="Icon_awesome-facebook-square-2" data-name="Icon awesome-facebook-square" d="M22.881,2.25H2.746A2.746,2.746,0,0,0,0,5V25.131a2.746,2.746,0,0,0,2.746,2.746H10.6V19.164h-3.6v-4.1h3.6V11.938c0-3.555,2.116-5.519,5.358-5.519a21.832,21.832,0,0,1,3.176.277v3.489H17.342A2.051,2.051,0,0,0,15.03,12.4v2.663h3.934l-.629,4.1H15.03v8.712h7.851a2.746,2.746,0,0,0,2.746-2.746V5A2.746,2.746,0,0,0,22.881,2.25Z" transform="translate(0 -2.25)" fill="none" stroke="#fff" stroke-width="1"/>'+
'  									</g>'+
'								</svg>'+
''+
'							</a>'+
'						</li>';

jQuery(facebookIcon).insertBefore(jQuery('.nav-menu .wpml-ls-item').first());
