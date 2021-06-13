<?php
class Controller_Albums extends Controller_Template
{
    /**
     * Display Albums
     */
    public function action_index()
    {
        // Get All albums
        $albums = Model_Album::find("all");
        
        $data = ["albums" => $albums];
        $this->template->title = "My Albums";
        $this->template->content = View::forge("albums/index", $data);
    }
    
    /**
     * Add Album
     */
    public function action_add()
    {
        if(Input::post("send")) {
            $album = new Model_Album();
            $album->artist = Input::post("artist");
            $album->title = Input::post("title");
            $album->genre = Input::post("genre");
            $album->year_released = Input::post("year_released");
            $album->label = Input::post("label");
            $album->cover_url = Input::post("cover_url");
            $album->details = Input::post("details");
            $album->save();
            
            Session::set_flash("success", "Album Added");
            
            Response::redirect("/albums");
        }
        $data = [];
        $this->template->title = "Add Album";
        $this->template->content = View::forge("albums/add", $data);
    }
    
    /**
     * Edit Album
     */
    public function action_view($id)
    {
        $album = Model_Album::find($id);
        
        $data = ["album" => $album];
        $this->template->title = "Album";
        $this->template->content = View::forge("albums/view", $data);
    }
    
    /**
     * Edit Album
     */
    public function action_edit($id)
    {
        if(Input::post("send")) {
            $album = Model_Album::find(Input::post("id"));
            $album->artist = Input::post("artist");
            $album->title = Input::post("title");
            $album->genre = Input::post("genre");
            $album->year_released = Input::post("year_released");
            $album->label = Input::post("label");
            $album->cover_url = Input::post("cover_url");
            $album->details = Input::post("details");
            $album->save();
            
            Session::set_flash("success", "Album Updated");
            
            Response::redirect("/albums");
        }
        
        $album = Model_Album::find($id);
                
        $data = ["album" => $album];
        $this->template->title = "Edit album";
        $this->template->content = View::forge("albums/edit", $data);
    }
    /**
     * Delete Album
     */
    public function action_delete($id)
    {
        $album = Model_Album::find($id);
        $album->delete();        

        Session::set_flash("success", "Album Deleted");
            
        Response::redirect("/albums");
    }
}
