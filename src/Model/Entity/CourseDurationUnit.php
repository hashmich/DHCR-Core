<?php
namespace DhcrCore\Model\Entity;

use Cake\ORM\Entity;

/**
 * CourseDurationUnit Entity
 *
 * @property int $id
 * @property string $name
 *
 * @property \App\Model\Entity\Course[] $courses
 */
class CourseDurationUnit extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'courses' => true
    ];
}
