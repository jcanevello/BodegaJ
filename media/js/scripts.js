$(function ($) {
    $('#sel2').select2();
    $('#datepickerDate').datepicker({
        format: 'mm-dd-yyyy'
    });
    setTimeout(function () {
        $('#content-wrapper > .row').css({
            opacity: 1,
            '-webkit-transform': 'translateY(0px)',
            '-moz-transform': 'translateY(0px)',
            '-ms-transform': 'translateY(0px)',
            '-o-transform': 'translateY(0px)',
            transform: 'translateY(0px)'
        });
    }, 200);

    $('#sidebar-nav .dropdown-toggle').click(function (e) {
        e.preventDefault();

        var $item = $(this).parent();

        if (!$item.hasClass('open')) {
            $item.parent().find('.open .submenu').slideUp('fast');
            $item.parent().find('.open').toggleClass('open');
        }

        $item.toggleClass('open');

        if ($item.hasClass('open')) {
            $item.children('.submenu').slideDown('fast');
        }
        else {
            $item.children('.submenu').slideUp('fast');
        }
    });

    $('.mobile-search').click(function (e) {
        e.preventDefault();

        $('.mobile-search').addClass('active');
        $('.mobile-search form input.form-control').focus();
    });
    $(document).mouseup(function (e) {
        var container = $('.mobile-search');

        if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            container.removeClass('active');
        }
    });

    $('.onoffswitch-checkbox').click(function () {
        var $this = $(this);
        var id = $this.data('id');
        var input = '<input class="input_stock" type="number" min="5" style="width: 50px;" id="stock_' + id + '" name="producto[' + id + '][]" value="5" required>'
        var content = '#content_stock_' + id

        if ($this.hasClass('active')) {
            $this.removeClass('active')
            $(content).html('');
        }
        else {
            $this.addClass('active')
            $(content).html(input)
        }
    })

    $('.datatable').DataTable();
    $('.datatable2').DataTable({
        "order": [[0, "desc"]]
    });

    $('.btn-add').click(function () {
        var $registro = $(this).parent().parent();
        var stock = $(this).data('stock');
        var id = $(this).data('id');
        var select = '<select class="form-control" name="prod[' + id + '][]">'
        for (var i = 1; i < (stock + 1); i++) {
            select += "<option value='" + i + "'>" + i + "</option>"
        }
        select += '</select>'

        $(this).parent().html(select)
        var row_new = $registro.clone();
        row_new.appendTo($('#table-venta > tbody'))
        $registro.remove()
    })

    $('#btn-mostrar-todo').click(function () {
        var r = confirm('Esta acción borrará las cantidades ingresadas');
        if (r == true)
            window.location = "/pedido/nuevo/t";
        return false;
    })

    $('#btn-imprimir').click(function () {
        $('.content-boleta').printArea();
    });

    

});

(function ($, sr) {
    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function (func, threshold, execAsap) {
        var timeout;

        return function debounced() {
            var obj = this, args = arguments;
            function delayed() {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null;
            }
            ;

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    // smartresize 
    jQuery.fn[sr] = function (fn) {
        return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
    };

})(jQuery, 'smartresize');