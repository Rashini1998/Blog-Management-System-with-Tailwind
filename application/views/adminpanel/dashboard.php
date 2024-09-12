<?php $this->load->view("adminpanel/header"); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 bg-white">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
        <h1 class="font-semibold font-sans text-4xl mb-8">Dashboard</h1>
    </div>

    <div class="mx-auto" style="width: 50%;">
        <div class="flex space-x-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-xl rounded-lg w-96">
                <figure>
                    <img src="<?= base_url().'assets/upload/blogimg/A.jpg'?>" alt="View Blogs" class="rounded-t-lg" />
                </figure>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">View Blogs</h2>
                    <p class="mb-4">You Can View Blogs here!</p>
                    <div class="text-right">
                        <a href="<?= base_url().'admin/blog/'?>"   class="text-white bg-indigo-400 hover:bg-indigo-500 font-medium rounded-lg text-sm px-5 py-2.5 no-underline hover:no-underline focus:outline-none">View Blog</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-xl rounded-lg w-96">
                <figure>
                    <img src="<?= base_url().'assets/upload/blogimg/B.jpg'?>" alt="Add Blogs" class="rounded-t-lg" />
                </figure>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">Add Blogs</h2>
                    <p class="mb-4">You Can Add Blogs here!</p>
                    <div class="text-right">
                        <a href="<?= base_url().'admin/blog/addblog'?>"  class="text-white bg-indigo-400 hover:bg-indigo-500 font-medium rounded-lg text-sm px-5 py-2.5 no-underline hover:no-underline focus:outline-none">Add Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('adminpanel/footer.php'); ?>
