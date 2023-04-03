<div class="modal fade" id="RetourModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->

@if (Session::has('RetourModal'))
    <div class="modal fade" id="RetourModal2" tabindex="-1" aria-labelledby="RetourModalLabel" aria-hidden="true"
        style="z-index: 99999999999999999999999999999999999">
        <div class="modal-dialog text-{{ Session::get('RetourModal')['type'] }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="RetourModalLabel">{{ Session::get('RetourModal')['titre'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ Session::get('RetourModal')['message'] }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endif
