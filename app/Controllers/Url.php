<?php

namespace App\Controllers;

use App\Models\UrlModel;
use CodeIgniter\Controller;

class Url extends Controller {

    protected $urlModel;

    public function __construct() {
        $this->urlModel = new UrlModel();
        helper(['url', 'form']);
    }

    public function index() {
        return view('url_form');
    }

    public function shorten() {
        $originalUrl = $this->request->getPost('url');
        if (empty($originalUrl)) {
            return view('url_form', ['error' => 'URL parameter is missing']);
        }

        $shortKey = $this->generateShortKey();
        $data = [
            'short_key' => $shortKey,
            'original_url' => $originalUrl
        ];

        if ($this->urlModel->insert($data)) {
            $shortenedUrl = base_url('short/' . $shortKey);
            return view('url_success', ['original_url' => $originalUrl, 'shortened_url' => $shortenedUrl]);
        } else {
            return view('url_form', ['error' => 'Failed to shorten the URL']);
        }
    }

    public function short($shortKey) {
        $url = $this->urlModel->where('short_key', $shortKey)->first();
        if ($url) {
            return redirect()->to($url['original_url']);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    private function generateShortKey() {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $shortKey = '';
        for ($i = 0; $i < 6; $i++) {
            $shortKey .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $shortKey;
    }
}
