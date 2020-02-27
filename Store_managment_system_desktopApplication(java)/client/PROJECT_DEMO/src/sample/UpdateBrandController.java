package sample;

import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import java.net.URL;
import java.util.ResourceBundle;
public class UpdateBrandController implements Initializable {
    @FXML
    private TextArea brand_description;
    @FXML
    private DatePicker brand_date;
    @FXML
    private ComboBox<String> category;
    @FXML
    private TextField brand_name;
    @FXML
    @Override
    public void initialize(URL location, ResourceBundle resources) {

    }


}
