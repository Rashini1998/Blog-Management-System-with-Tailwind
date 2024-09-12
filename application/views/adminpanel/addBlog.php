<?php $this->load->view('adminpanel/header');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">


    <h1 class="font-semibold font-sans text-4xl mb-8 mt-6">Add Blog</h1>
    <form enctype="multipart/form-data" action="<?= base_url().'admin/Blog/addblog_post'?>" method="post">

        <div class="form-group">
            <label for="blog_title" class="font-sans block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" class="form-control" id="blog_title" placeholder="Title" name="blog_title">
        </div>
        <div class="form-group">
            <label for="blog_desc" class="font-sans block text-gray-700 text-sm font-bold mb-2">Description</label>
            <!-- <input type="text" class="form-control" id="blog_desc" placeholder="Description"> -->
            <textarea class="form-control" rows="3" id="blog_desc" placeholder="Description" name="blog_desc"></textarea>
        </div>
        <div class="form-group">
            <label for="blog_img" class="font-sans block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input type="file" id="blog_img" name="blog_img">
            
        </div>
        <button type="submit" class="shadow bg-indigo-400 hover:bg-indigo-200 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >Add Blog</button>

    </form>
</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer');?>


<!-- check sessions -->
<script type="text/javascript">
<?php 
    if (isset($_SESSION['inserted'])) {
        if($_SESSION['inserted']=="yes"){
            echo "alert('Data Inserted Successfully')";
            
        }else{
            echo "alert('Not Inserted ')";
        }
      
    }
    ?>
</script>

<!-- <script src="https://cdn.ckeditor.com/4.25.0-lts/standard/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


<script>
CKEDITOR.replace('blog_desc');
</script>