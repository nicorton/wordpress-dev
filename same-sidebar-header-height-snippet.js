
/* WordPress Snippet For https://camba.org/ */

/* On some pages the main page header was too long & it didn't align with the side bar header (see: https://camba.org/news/special-events/nycruns-prospect-park-5k-benefiting-camba/) */

/* This snippet ensures the sidebar header height always matches the page header height */

$(document).ready(function(){ 
    var maxHeight = 0;
    $('.entry-header').each(function() {
        maxHeight = Math.max(maxHeight, $(this).height());
    });
    $('.pages-nav-title').css({height:maxHeight + 'px'});
 });