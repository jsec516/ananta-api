<?php

namespace Qclinic\Contracts;

interface ClinicRepositoryContract
{
	/**
     * Retrieve clnic using owner identifier.
     *
     * @param  mixed  $identifier
     * @return mixed|null
     */
    public function findOrThrowException($identifier);

	/**
     * Retrieve clnic using owner identifier.
     *
     * @param  mixed  $identifier
     * @return mixed|null
     */
    public function create($input); 
    
    /**
     * Retrieve clnic using owner identifier.
     *
     * @param  mixed  $identifier
     * @return mixed|null
     */
    public function update($input);  

    /**
     * Retrieve clnic using owner identifier.
     *
     * @param  mixed  $identifier
     * @return mixed|null
     */
    public function delete($input); 

}