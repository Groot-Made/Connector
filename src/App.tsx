import { routes } from '@generouted/react-router/lazy';
import { RouterProvider, createHashRouter } from 'react-router-dom';
export default function App() {
	const router = createHashRouter(routes);
	return <RouterProvider router={router} />;
}
