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
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-011-compass"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-012-cube"></i></td>
            </tr>
        </tbody>
        <tbody>
            <!-- Corps du tableau -->
            <tr>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-013-puzzle"></i>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-014-magic-wand"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-015-book"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-016-vision"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-017-notebook"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-018-laptop-1"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-019-coffee-cup"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-020-creativity"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-021-thinking"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-022-branding"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-023-flask"></i></td>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-024-idea-2"></i></td>
            </tr>
        </tbody>
        <tbody>
            <!-- Corps du tableau -->
            <tr>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-025-imagination"></i>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-026-search"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-027-monitor"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-028-idea-1"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-029-sketchbook"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-030-computer"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-031-scheme"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-032-explorer"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-033-museum"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-034-cactus"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-035-smartphone"></i></td>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-036-brainstorming"></i></td>
            </tr>
        </tbody>
        <tbody>
            <!-- Corps du tableau -->
            <tr>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-037-idea"></i>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-038-graphic-tool-1"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-039-vector"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-040-rgb"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-041-graphic-tool"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-042-typography"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-043-sketch"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-044-paint-bucket"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-045-video-player"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-046-laptop"></i></td>
                <td> <i style="font-size: -webkit-xxx-large;" class="flaticon-047-artificial-intelligence"></i></td>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-048-abstract"></i></td>
            </tr>
        </tbody>
        <tbody>
            <!-- Corps du tableau -->
            <tr>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-049-projector"></i></td>
                <td><i style="font-size: -webkit-xxx-large;" class="flaticon-050-satellite"></i></td>
            </tr>
        </tbody>
    </table>
</div>


<input type="hidden" id="input" name='icone_choic' value="">


<div class="text-center">
    <h1 style="font-size:110px;margin:50px;">
        <i id="monicone" class="<?= get_post_meta(get_the_ID(), 'icone_choic', true); ?>"></i>
    </h1>
</div>

<script>
    let icones = document.querySelectorAll('i');

    const newClick = (event) => {
        let input = document.querySelector('#input');
        let i = document.querySelector('#monicone');
        let click = event.currentTarget
        input.value = click.className;
        let valuee = document.querySelector('.bg-success');
        if (valuee)
            valuee.classList.remove('bg-success');
        click.classList.add('bg-success');

        i.className = '';
        i.className = input.value;
    };
    icones.forEach(icone => icone.addEventListener('click', newClick));
</script>