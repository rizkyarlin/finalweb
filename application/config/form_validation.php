<?php
        $config = array(

                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'trim|required|min_length[5]'
                ),
                array(
                        'field' => 'nim',
                        'label' => 'NIM',
                        'rules' => 'trim|required|exact_length[9]'
                ),
                array(
                        'field' => 'gender',
                        'label' => 'Gender',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'place',
                        'label' => 'Place',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'date',
                        'label' => 'Date',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'goldar',
                        'label' => 'Goldar',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'prodi',
                        'label' => 'Prodi',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'angkatan',
                        'label' => 'Angkatan',
                        'rules' => 'required'
                )
        );

?>