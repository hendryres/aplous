<?php

class Irjequipment extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=100, nullable=true)
     */
    public $equipment;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $dokter;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tanggal;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    public $harga;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    public $qty;

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
        return 'irjequipment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Irjequipment[]|Irjequipment
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Irjequipment
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
