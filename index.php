<?php
require "./components/header.php"; ?>
<div class="m-5">
    <form action="post">
        <h1 class="m-2">Enter your feedback here</h1>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="What your name?">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email">
        </div>
        <div class="mb-3">

            <textarea type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your feedback">
            </textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="send" />
    </form>
</div>
<?php include "components/footer.php"; ?>