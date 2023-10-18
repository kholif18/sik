<div class="modal fade" id="add-category" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-category" action="{{ route('category-store') }}" class="form-horizontal" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <h4 id="form-category-title" class="modal-title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="reset-form" type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fas fa-paper-plane"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div><!-- End Basic Modal-->
