<div class="container">
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <br>
                <h2>Publicar:</h2>

                 <form method="post" action="save_publ.php" enctype="multipart/form-data" >
                  <div class="form-group">
                    <label for="email">Title del Post:</label>
                    <input type="text" name="title" class="form-control" id="usua" size="20">
                  </div>
                  <div class="form-group">
                    <label for="file">Upload Image:</label>
                    <input type="file" name="fileToUpload" id="file" >
                  </div>

                  <div class="form-group">
                    <label for="file">category:</label><br>
                      <select class="form-control" name="cat">
                      <option value="" > Seleccione...</option>
                      <option value="programming" > Programming</option>
                      <option value="hacking" >Hacking</option>
                      <option value="tools" >Tools</option>
                      <option value="news" >News</option>
                      <option value="other" >OTher</option>
                    </select>
                  </div>

                  <br>
                  <div class="form-group">
                    <label for="comment">Texto:</label>
                    <textarea class="form-control" name="text"  id="mytextarea"></textarea>
                  </div>
                  <button type="submit" class="btn btn-default" name="upload" >Submit</button>
                </form>
                <br>

            </div>
        </div>
</div>