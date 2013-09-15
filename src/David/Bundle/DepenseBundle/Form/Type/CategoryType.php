<?php
namespace David\Bundle\DepenseBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of LigneType
 *
 * @author David
 */
class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder->add('name')
                 ->add('description')
                 ->add('save','submit');
     
    }
    
    public function getName()
    {
        return 'category';
    }

    public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'David\Bundle\DepenseBundle\Entity\Category',
        ));
    }
    
}
