/* Mobile/tablet off-canvas sidebar toggle. The vendor theme ships the
   hamburger (.atab-menu) button with no CSS or JS behind it at all — this
   wires it up against the body.admin-menu-open class used by
   theme-sync.css's responsive rules. Closing happens via the hamburger
   again, the backdrop, or tapping a real nav link (see below) — the
   vendor's separate .btn-close-menu lives in the topbar, disconnected
   from the sidebar panel, so it isn't used here. */
document.addEventListener('DOMContentLoaded', function () {
    var body = document.body;
    var openBtn = document.querySelector('.atab-menu');
    var sidebar = document.querySelector('.sb2-1');

    var backdrop = document.createElement('div');
    backdrop.className = 'admin-menu-backdrop';
    document.body.appendChild(backdrop);

    function openMenu() {
        body.classList.add('admin-menu-open');
    }

    function closeMenu() {
        body.classList.remove('admin-menu-open');
    }

    if (openBtn) {
        openBtn.addEventListener('click', function (e) {
            e.preventDefault();
            body.classList.contains('admin-menu-open') ? closeMenu() : openMenu();
        });
    }

    backdrop.addEventListener('click', closeMenu);

    // Close the sidebar after tapping a real link on mobile, so the menu
    // doesn't stay open over the page it just navigated to.
    if (sidebar) {
        sidebar.addEventListener('click', function (e) {
            var link = e.target.closest('a');
            if (!link) return;
            var isToggle = link.classList.contains('collapsible-header');
            if (!isToggle && window.innerWidth <= 991) {
                closeMenu();
            }
        });
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth > 991) {
            closeMenu();
        }
    });
});
