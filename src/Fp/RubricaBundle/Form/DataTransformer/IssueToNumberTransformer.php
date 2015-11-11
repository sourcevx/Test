<?php

namespace Fp\RubricaBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Fp\RubricaBundle\Entity\Area;

class IssueToNumberTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * Trasforma un oggetto (issue) in una stringa (number).
     *
     * @param  Issue|null $issue
     * @return string
     */
    public function transform($issue)
    {
        
        
        
        if (null === $issue) {
            return "";
        }

        return $issue->getIssue();
    }

    /**
     * Trasforma una stringa (number) in un oggetto (issue).
     *
     * @param  string $number
     *
     * @return Issue|null
     *
     * @throws TransformationFailedException se l'oggetto (issue) non viene trovato.
     */
    public function reverseTransform($number)
    {
        if (!$number) {
            return null;
        }

        $issue = $this->om
            ->getRepository('RubricaBundle:Area')
            ->findOneBy(array('number' => $number))
        ;

        if (null === $issue) {
            throw new TransformationFailedException(sprintf(
                'Non esiste una issue con numero "%s"!',
                $number
            ));
        }

        return $issue;
    }
}

