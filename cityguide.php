<?php
// cityguide.php - The OOP class file

class CityGuide {
    private $allowedCities = ['Tokyo', 'Paris', 'London'];
    private $city;

    // Constructor to initialize the city
    public function __construct($city = 'Tokyo') {
        $this->setCity($city);  // Set the city using a default or passed value
    }

    // Method to set the city, with validation
    public function setCity($city) {
        if (in_array($city, $this->allowedCities)) {
            $this->city = $city;
        } else {
            $this->city = 'Tokyo';  // Default city if invalid
        }
    }

    // Method to get the current city
    public function getCity() {
        return $this->city;
    }

    // Method to render the page content based on the selected city
    public function renderCityPage() {
        include __DIR__ . "/" . strtolower($this->city) . ".php";  // Include the specific city page
    }

    // Method to display the city selection buttons (form)
    public function displayCityButtons() {
        echo '<div class="city-buttons">';
        echo '<form method="get">';
        foreach ($this->allowedCities as $city) {
            $active = ($this->city == $city) ? 'class="active"' : '';
            echo "<button type='submit' name='city' value='$city' $active>$city</button>";
        }
        echo '</form>';
        echo '</div>';
    }
}
?>
