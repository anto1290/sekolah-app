<?php

class AboutController extends Controller {
    public function index() {
        $data['title'] = 'About Us';
        $data['content'] = 'This is the about page of our school information system.';
        
        // Load the view file
        $this->layout('about/index','default', $data);
    }
}
