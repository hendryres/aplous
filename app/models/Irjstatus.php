<?php

class Irjstatus extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $rm;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $jamkeluar;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $alasankeluar;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $keadaankeluar;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("aplous_data");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'irjstatus';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Irjstatus[]|Irjstatus
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Irjstatus
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
