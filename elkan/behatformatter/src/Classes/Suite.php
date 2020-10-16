<?php

namespace elkan\BehatFormatter\Classes;

class Suite
{
    private $name;
    private $features;
    private $time;
    private $totalFeatures;
    private $failedFeatures;
    private $successFeatures;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param mixed $name
     */
    public function setTime($time)
    {
      $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param mixed $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
    }

    public function addFeature($feature)
    {
        $this->features[] = $feature;
    }
}

