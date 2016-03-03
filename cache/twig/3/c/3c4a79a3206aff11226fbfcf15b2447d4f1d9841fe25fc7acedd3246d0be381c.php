<?php

/* plupload.html */
class __TwigTemplate_3c4a79a3206aff11226fbfcf15b2447d4f1d9841fe25fc7acedd3246d0be381c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
// lets load the plupload crap super huge files becuase... wait for it wait for it. \"swear here\"
head.ready(function () {
//<![CDATA[
phpbb.plupload = {
\ti18n: {
\t\t'b': '";
        // line 7
        echo addslashes($this->env->getExtension('phpbb')->lang("BYTES_SHORT"));
        echo "',
\t\t'kb': '";
        // line 8
        echo addslashes($this->env->getExtension('phpbb')->lang("KB"));
        echo "',
\t\t'mb': '";
        // line 9
        echo addslashes($this->env->getExtension('phpbb')->lang("MB"));
        echo "',
\t\t'gb': '";
        // line 10
        echo addslashes($this->env->getExtension('phpbb')->lang("GB"));
        echo "',
\t\t'tb': '";
        // line 11
        echo addslashes($this->env->getExtension('phpbb')->lang("TB"));
        echo "',
\t\t'Add Files': '";
        // line 12
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES"));
        echo "',
\t\t'Add files to the upload queue and click the start button.': '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES_TO_QUEUE"));
        echo "',
\t\t'Close': '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_CLOSE"));
        echo "',
\t\t'Drag files here.': '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG"));
        echo "',
\t\t'Duplicate file error.': '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_DUPLICATE_ERROR"));
        echo "',
\t\t'File: %s': '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE"));
        echo "',
\t\t'File: %s, size: %d, max file size: %d': '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILE_DETAILS"));
        echo "',
\t\t'File count error.': '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_COUNT"));
        echo "',
\t\t'File extension error.': '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_EXTENSION_ERROR"));
        echo "',
\t\t'File size error.': '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE_ERROR"));
        echo "',
\t\t'File too large:': '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_TOO_LARGE"));
        echo "',
\t\t'Filename': '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME"));
        echo "',
\t\t'Generic error.': '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_GENERIC_ERROR"));
        echo "',
\t\t'HTTP Error.': '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_HTTP_ERROR"));
        echo "',
\t\t'Image format either wrong or not supported.': '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IMAGE_FORMAT"));
        echo "',
\t\t'Init error.': '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_INIT_ERROR"));
        echo "',
\t\t'IO error.': '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_IO_ERROR"));
        echo "',
\t\t'Invalid file extension:': '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_FILE_INVALID_EXT"));
        echo "',
\t\t'N/A': '";
        // line 30
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_NOT_APPLICABLE"));
        echo "',
\t\t'Runtime ran out of available memory.': '";
        // line 31
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_RUNTIME_MEMORY"));
        echo "',
\t\t'Security error.': '";
        // line 32
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SECURITY_ERROR"));
        echo "',
\t\t'Select files': '";
        // line 33
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SELECT_FILES"));
        echo "',
\t\t'Size': '";
        // line 34
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE"));
        echo "',
\t\t'Start Upload': '";
        // line 35
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_UPLOAD"));
        echo "',
\t\t'Start uploading queue': '";
        // line 36
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_START_CURRENT_UPLOAD"));
        echo "',
\t\t'Status': '";
        // line 37
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS"));
        echo "',
\t\t'Stop Upload': '";
        // line 38
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_UPLOAD"));
        echo "',
\t\t'Stop current upload': '";
        // line 39
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_STOP_CURRENT_UPLOAD"));
        echo "',
\t\t\"Upload URL might be wrong or doesn't exist.\": '";
        // line 40
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ERR_UPLOAD_URL"));
        echo "',
\t\t'Uploaded %d/%d files': '";
        // line 41
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_UPLOADED"));
        echo "',
\t\t'%d files queued': '";
        // line 42
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_FILES_QUEUED"));
        echo "',
\t\t'%s already present in the queue.': '";
        // line 43
        echo addslashes($this->env->getExtension('phpbb')->lang("PLUPLOAD_ALREADY_QUEUED"));
        echo "'
\t},
\tconfig: {
\t\truntimes: 'html5',
\t\turl: '";
        // line 47
        echo (isset($context["S_PLUPLOAD_URL"]) ? $context["S_PLUPLOAD_URL"] : null);
        echo "',
\t\tmax_file_size: '";
        // line 48
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "b',
\t\tchunk_size: '";
        // line 49
        echo (isset($context["CHUNK_SIZE"]) ? $context["CHUNK_SIZE"] : null);
        echo "b',
\t\tunique_names: true,
\t\tfilters: [";
        // line 51
        echo (isset($context["FILTERS"]) ? $context["FILTERS"] : null);
        echo "],
\t\t";
        // line 52
        echo (isset($context["S_RESIZE"]) ? $context["S_RESIZE"] : null);
        echo "
\t\theaders: {'X-PHPBB-USING-PLUPLOAD': '1', 'X-Requested-With': 'XMLHttpRequest'},
\t\tfile_data_name: 'fileupload',
\t\tmultipart_params: {'add_file': '";
        // line 55
        echo addslashes($this->env->getExtension('phpbb')->lang("ADD_FILE"));
        echo "'},
\t\tform_hook:";
        // line 56
        if ((isset($context["S_SNAPPY"]) ? $context["S_SNAPPY"] : null)) {
            echo " '#qr_postform'";
        } else {
            echo " '#postform'";
        }
        echo ",
\t\tbrowse_button: 'add_files',
\t\tdrop_element : 'message',
\t},
\tlang: {
\t\tERROR: '";
        // line 61
        echo addslashes($this->env->getExtension('phpbb')->lang("ERROR"));
        echo "',
\t\tTOO_MANY_ATTACHMENTS: '";
        // line 62
        echo addslashes($this->env->getExtension('phpbb')->lang("TOO_MANY_ATTACHMENTS"));
        echo "',
\t},
\torder: '";
        // line 64
        echo (isset($context["ATTACH_ORDER"]) ? $context["ATTACH_ORDER"] : null);
        echo "',
\tmaxFiles: ";
        // line 65
        echo (isset($context["MAX_ATTACHMENTS"]) ? $context["MAX_ATTACHMENTS"] : null);
        echo ",
\tdata: ";
        // line 66
        echo (isset($context["S_ATTACH_DATA"]) ? $context["S_ATTACH_DATA"] : null);
        echo ",
}
//]]>
head.load(\"";
        // line 69
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/plupload/plupload.full.min.js\", \"";
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/vendors/plupload.min.js\");
});
</script>";
    }

    public function getTemplateName()
    {
        return "plupload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 69,  234 => 66,  230 => 65,  226 => 64,  221 => 62,  217 => 61,  205 => 56,  201 => 55,  195 => 52,  191 => 51,  186 => 49,  182 => 48,  178 => 47,  171 => 43,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
