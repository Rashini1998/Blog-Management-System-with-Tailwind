<?php $this->load->view('adminpanel/header');?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <h2 class="font-semibold font-sans text-4xl mb-8 mt-6">View Blog</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-sm border-separate border border-slate-400 font-sans">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($result){
                    $counter = 1;
                    foreach($result as $key => $value){
                        echo "
                        
                    <tr>
                    <td>
                        ".$counter."
                    </td>
                    <td>
                        ".$value['blog_title']."
                    </td>
                    <td>
                        ".$value['blog_desc']."
                    </td>
                    <td>
                         <img src='".base_url().$value['blog_img']."' class='img-fluid' width='100'/>
                    </td>
                    <td>
                        <a class=\"btn bg-green-400 text-neutral-50 shadow  hover:bg-green-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded\" href='".base_url().'admin/Blog/editBlog/'.$value['blogId']."'>Edit</a>
                </td>
                <td>
                    <a class=\"btn delete bg-rose-500 text-neutral-50 shadow  hover:bg-rose-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded\" href='#.' data-id = '".$value['blogId']."'>Delete</a>
                </td>
                </tr>
                ";
                $counter++;


                }

                }else{
                echo "<tr>
                    <td colspan='6'>No Records found</td>
                <tr>";
                    }

                    ?>

            </tbody>

        </table>

    </div>

</main>
</div>
</div>

<?php $this->load->view('adminpanel/footer');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
        $(".delete").click(function(){
            var delete_id = $(this).attr('data-id');
            var bool = confirm("Are You Sure You Want to Delete?");
            if(bool){
                alert("Move to delete functionality using AJAX");
                //AJAX Method to delete.....
                $.ajax({
                    url:'<?= base_url().'admin/blog/deleteBlog/'?>',
                    type:'post',
                    data:{'delete_id': delete_id},
                    success:function(response){
                        console.log(response);
                        if(response=='Deleted'){
                            //reload the page
                            location.reload();
                        }else if(response=='Not Deleted'){
                            alert ("Something went wrong.");

                        }

                    }
                })

            }else{
                alert("Your blog is safe.");
            }
            
        })


        <?php 
            if (isset($_SESSION['updated'])) {
				if ($_SESSION['updated'] == "yes") {
					echo 'alert("Data has been updated!");';
				}else if($_SESSION['updated'] == "no"){
					echo 'alert("Some error occurred & data not updated!");';

				}
			}
        
        ?>
</script>
