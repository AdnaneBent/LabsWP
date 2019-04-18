<div class="table-responsive">
    <table class="table">
        <tbody>
            <!-- Corps du tableau -->
            <tr>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-001-picture"></i>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-002-caliper"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-003-energy-drink"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-004-build"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-005-thinking-1"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-006-prism"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-007-paint"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-008-team"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-009-idea-3"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-010-diamond"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-011-compas"></i></td>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-012-cube"></i></td>
            </tr>
        </tbody>
    </table>
    <h1><i id=""></i></h1>
    <input type="hidden" id="input" name="">
</div>

<script>
    let icones = document.querySelectorAll('i');

    const newClick = (event) => {
        let input = document.querySelector('#input');
        let click = event.currentTarget
        input.value = click.className;
        let valuee = document.querySelector('.bg-success');
        if (valuee)
            valuee.classList.remove('bg-success');
        click.classList.add('bg-success');
    };
    icones.forEach(icone => icone.addEventListener('click', newClick));
</script>