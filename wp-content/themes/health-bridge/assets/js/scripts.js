
(function ($) {
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('keydown', function(e) {
            // Check if the pressed key is an arrow key
            if (e.key === 'ArrowLeft') {
                // Redirect to the previous page
                history.back();
            } else if (e.key === 'ArrowRight') {
                // Redirect to the next page
                history.forward();
            }
        });
    });
  })(jQuery);
  