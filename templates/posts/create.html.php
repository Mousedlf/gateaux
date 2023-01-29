<h1 class="mb-4">New recipe</h1>

<form enctype="multipart/form-data" action="index.php?type=post&action=create" method="post">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" name="title" id="">

    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" type="text" name="content" id=""></textarea>
    </div>

    <input class="btn mt-3" type="file" name="postImage" id="">

    <input class="btn btn-success" type="submit" value="Envoyer">

</form>



