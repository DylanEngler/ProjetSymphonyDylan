<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 14/01/2018
 * Time: 10:43
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ExpProAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('expTitre', 'text');
        $formMapper->add('expLieu', 'text');
        $formMapper->add('expDebut', 'date');
        $formMapper->add('expFin', 'date');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('expTitre')->add('expLieu')->add('expDebut')->add('expFin');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('expTitre')->add('expLieu')->add('expDebut')->add('expFin');
    }
}