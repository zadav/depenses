<?php
namespace David\Bundle\DepenseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of BilanType
 *
 * @author David
 */
class BilanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add(
                        'mois',
                        'date',
                        array(
                            'format'          => 'dd-MM-yyyy',
                            'years'           => range(date('Y'), date('Y')+12),
                            'days'            => array(1),
                            'empty_value'     => array('year' => '----', 'month' => '----', 'day' => false)
                        )

                    )
                 ->add('save','submit');
     
    }
    
    public function getName()
    {
        return 'Bilan';
    }
}

?>
