<form method='post' action="{{ url('send') }}" class="panel form-horizontal">
    <div class="panel-heading">
        <span class="panel-title">Contact</span>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Name" class="form-control form-group-margin">
            </div>
            <div class="col-md-4">
                <input type="email" name="email" placeholder="Email" class="form-control form-group-margin">
            </div>
            <div class="col-md-4">
                <input type="url" name="website" placeholder="Website" class="form-control form-group-margin">
            </div>
        </div><!-- row -->
        <textarea name="description" class="form-control" rows="5" placeholder="Message"></textarea>
    </div>
    <div class="panel-footer text-right">
        <button class="btn btn-primary">Send message</button>
    </div>
</form>