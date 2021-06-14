<?php
class lib_template{
    protected $_ci;

    function __construct()
    {
        $this->_ci =& get_instance();
    }

    function views($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            // Pada Bagian $data['head'] dan untuk memanggil file head.php dari folder admin/_template/
            // ['head'] data yang ini kita panggil dari file template.php yang berasal dari folder admin/_template/
            $data['head'] = $this->_ci->load->view('admin/_template/head', $data, TRUE);

            // Pada Bagian $data['topbar'] dan untuk memanggil file topbar.php dari folder admin/_template/
            // ['topbar'] data ini yang kita panggil dari file template.php yang berasal dari folder admin/_template/
            $data['topbar'] = $this->_ci->load->view('admin/_template/topbar', $data,TRUE);

            // Pada Bagian $data['sidebar'] dan untuk memanggil file sidebar.php dari folder admin/_template/
            // ['sidebae'] data ini yang kita panggil dari file template.php dari folder admin/_template/
            $data['sidebar'] = $this->_ci->load->view('admin/_template/sidebar', $data, TRUE);

            // ['isi'] Code data ini yang kita panggil dari file content.php dari folderadmin/_template/
            $data['isi'] = $this->_ci->load->view($template, $data, TRUE);

            // Pada Bagian $data['content'] dan untuk memanggil file content.php dari folder admin/_template/
            // dan ['content'] pada data yang kita panggil dari file template.php dari folder admin/_template/
            $data['content'] = $this->_ci->load->view('admin/_template/content', $data,TRUE);

            // Pada Bagian $data['footer'] dan untuk memanggil file footer.php dari folder admin/_template/
            // dan ['footer'] pada data yang kita panggil dari file template.php dari folder admin/_template/
            $data['footer'] = $this->_ci->load->view('admin/_template/footer', $data, TRUE);

            // Pada Bagian $data['template'] dan untuk menampilkan file template.php dari folder admin/_template/
            // dan view('admin/_template/Template', $data, TRUE); bertujuan untuk memanggil $data diatas seperti $data['head'], dll
            echo $data['template'] = $this->_ci->load->view('admin/_template/template', $data, TRUE);
        }
    }
}
