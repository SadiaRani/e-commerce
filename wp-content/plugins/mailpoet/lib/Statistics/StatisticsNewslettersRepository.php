<?php declare(strict_types = 1);

namespace MailPoet\Statistics;

if (!defined('ABSPATH')) exit;


use MailPoet\Doctrine\Repository;
use MailPoet\Entities\NewsletterEntity;
use MailPoet\Entities\SendingQueueEntity;
use MailPoet\Entities\StatisticsNewsletterEntity;
use MailPoet\Entities\SubscriberEntity;

/**
 * @extends Repository<StatisticsNewsletterEntity>
 */
class StatisticsNewslettersRepository extends Repository {
  protected function getEntityClassName() {
    return StatisticsNewsletterEntity::class;
  }

  public function createMultiple(array $data): void {
    $entities = [];

    foreach ($data as $value) {
      if (!empty($value['newsletter_id']) && !empty($value['queue_id']) && !empty($value['subscriber_id'])) {
        $newsletter = $this->entityManager->getReference(NewsletterEntity::class, $value['newsletter_id']);
        $queue = $this->entityManager->getReference(SendingQueueEntity::class, $value['queue_id']);
        $subscriber = $this->entityManager->getReference(SubscriberEntity::class, $value['subscriber_id']);

        if (!$newsletter || !$queue || !$subscriber) {
          continue;
        }

        $entity = new StatisticsNewsletterEntity($newsletter, $queue, $subscriber);

        $this->entityManager->persist($entity);
        $entities[] = $entity;
      }
    }

    if (count($entities)) {
      $this->entityManager->flush();
    }
  }
}
