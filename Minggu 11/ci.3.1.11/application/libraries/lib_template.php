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
            // Bagian $data['head'] untuk memanggil file head.php dari folder admin/_template/
            // ['head'] data yang kita panggil dari file template.php dari folder admin/_template/
            $data['head'] = $this->_ci->load->view(
                'admin/_template/head',
                $data,
                TRUE
            );

            // Bagian $data['topbar'] untuk memanggil file topbar.php dari folder admin/_template/
            // ['topbar'] data yang kita panggil dari file template.php dari folder admin/_template/
            $data['topbar'] = $this->_ci->load->view(
                'admin/_template/topbar',
                $data,
                TRUE
            );

            // Bagian $data['sidebar'] untuk memanggil file sidebar.php dari folder admin/_template/
            // ['sidebae'] data yang kita panggil dari file template.php dari folder admin/_template/
            $data['sidebar'] = $this->_ci->load->view(
                'admin/_template/sidebar',
                $data,
                TRUE
            );

            // ['isi'] data yang kita panggil dari file content.php dari folderadmin/_template/
            $data['isi'] = $this->_ci->load->view(
                $template, 
                $data, 
                TRUE
            );

            // Bagian $data['content'] untuk memanggil file content.php dari folder admin/_template/
            // ['content'] data yang kita panggil dari file template.php dari folder admin/_template/
            $data['content'] = $this->_ci->load->view(
                'admin/_template/content',
                $data,
                TRUE
            );

            // Bagian $data['footer'] untuk memanggil file footer.php dari folder admin/_template/
            // ['footer'] data yang kita panggil dari file template.php dari folder admin/_template/
            $data['footer'] = $this->_ci->load->view(
                'admin/_template/footer', 
                $data, 
                TRUE
            );

            // Bagian $data['template'] untuk menampilkan file template.php dari folder admin/_template/
            // view('admin/_template/Template', $data, TRUE); untuk memanggil $data diatas seperti $data['head'], dll
            echo $data['template'] = $this->_ci->load->view(
                'admin/_template/template', 
                $data, 
                TRUE
            );
        }
    }
}
