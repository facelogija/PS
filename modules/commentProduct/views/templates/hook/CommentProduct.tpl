<form action="{$smarty.server.REQUEST_URI}" method="POST">
    <fieldset class="form-group">
        <label class="form-control-label">Your Name</label>
        <input type="text" name="name" class="form-control" id="name">
    </fieldset>
    <br>
    <fieldset class="form-group">
        <label class="form-control-label">Comment</label>
        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
    </fieldset>
    <br>
    <input type="submit" class="btn btn-outline-primary" value="Submit">
</form>

