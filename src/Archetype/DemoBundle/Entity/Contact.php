<?php

namespace Archetype\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Contact
{
    public const SUBJECT_GENERAL = 1;
    protected const SUBJECT_SPECIFIC = 2;

    protected const STATUS_UNREAD = 1;
    protected const STATUS_READ = 2;
    protected const STATUS_PROCESSED = 3;

    protected const TYPE_COMMENT = 1;
    protected const TYPE_BUG = 2;

    protected const PREFERENCE_DESIGN = 1;
    protected const PREFERENCE_BACKEND = 2;
    protected const PREFERENCE_FRONTEND = 3;
    protected const PREFERENCE_MARKETING = 4;

    public static $subjectChoices = [
        'form.subject.general' => self::SUBJECT_GENERAL,
        'form.subject.specific' => self::SUBJECT_SPECIFIC,
    ];

    public static $statusChoices = [
        'contact.status.unread' => self::STATUS_UNREAD,
        'contact.status.read' => self::STATUS_READ,
        'contact.status.processed' => self::STATUS_PROCESSED,
    ];

    public static $typeChoices = [
        'form.type.comment' => self::TYPE_COMMENT,
        'form.type.bug' => self::TYPE_BUG,
    ];

    public static $preferenceChoices = [
        'form.preference.design' => self::PREFERENCE_DESIGN,
        'form.preference.backend' => self::PREFERENCE_BACKEND,
        'form.preference.frontend' => self::PREFERENCE_FRONTEND,
        'form.preference.marketing' => self::PREFERENCE_MARKETING,
    ];

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="integer")
     */
    protected $subject;

    /**
     * @ORM\Column(type="integer")
     */
    protected $type;

    /**
     * @ORM\Column(type="array")
     */
    protected $preferences;

    /**
     * @ORM\Column(type="text")
     */
    protected $comment;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $newsletter;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $privacyPolicy;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status = self::STATUS_UNREAD;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function __toString()
    {
        return (string) $this->getName();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getSubject(): ?int
    {
        return $this->subject;
    }

    public function setSubject(?int $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPreferences(): ?array
    {
        return $this->preferences;
    }

    public function setPreferences(?array $preferences): self
    {
        $this->preferences = $preferences;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getNewsletter(): ?bool
    {
        return $this->newsletter;
    }

    public function setNewsletter(?bool $newsletter): self
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    public function getPrivacyPolicy(): ?bool
    {
        return $this->privacyPolicy;
    }

    public function setPrivacyPolicy(?bool $privacyPolicy): self
    {
        $this->privacyPolicy = $privacyPolicy;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(?\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
