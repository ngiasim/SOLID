/**
 * An example of a Class that violates the Single Responsibility Principle.
 * Creation of customer and order mixed up.
 */

// Bad Example
class CustomerOrder {
     
    public void createCustomer(int customerId, String name) {
        // Create customer
    }
     
    public void submitOrder(Cart shopCart) {
        // Submit Orders for processing
    }
}
